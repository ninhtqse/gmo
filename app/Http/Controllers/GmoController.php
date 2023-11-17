<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GmoController extends Controller
{
    /**
     * ================> WEB <============================
     */
    public function getViewTransfer()
    {
        return view('GMO.transfer');
    }

    public function submitTransfer(Request $request)
    {
        $record = \DB::table('virtual_accounts')->where('vaAccountNumber', $request->get('account_number'))->first();

        $array = [
            'vaTransaction' => [
                'vaId' => $record->vaId,
                'transactionDate' => date('Y-m-d'),
                'depositAmount' => $request->get('amount'),
                'remitterNameKana' => 'GMO',
                'paymentBankName' => '502',
                'paymentBranchName' => '1',
                'itemKey' => $record->itemKey,
            ]
        ];
        $headers = [
            'x-webhook-signature' => base64_encode(hash_hmac('sha256', json_encode($array), Config('config.secret_key'), true))
        ];

        $this->process(Config('config.callback_url'), 'POST', $array, $headers);
    }

    /**
     * ================> API <============================
     */
    public function verifyAccountNumber($numberAccount)
    {
        $record = \DB::table('virtual_accounts')->where('vaAccountNumber', $numberAccount)->first();
        if ($record) {
            return response()->json(['status' => 'success', 'code' => 'GAS001', 'data' => ['virtual_account' => $record]]);
        } else {
            return response()->json(['status' => 'error', 'code' => 'GAE001']);
        }
    }

    /**
     * This function will get code, after that redirect factorx site and get token gmo
     * @template looks like below
     * "response_type" => "code"
     * "scope" => "private:account private:virtual-account private:transfer"
     * "client_id" => "0h89y3hIUpA3neBC"
     * "state" => "14578c7d15cfdcd8b0693ffb4498c9b25821a8313ed0c4421a79fadfb6242818"
     * "redirect_uri" => "http://localhost:8000/api/v1/payment/gmo/redirect"
     */
    public function getCode(Request $request) {
        //make url
        $url = $request->get('redirect_uri'). '?state='. $request->state . '&code=123qweasdzxc';
        $this->process($url, 'GET');

        return response()->json(['status' => 'success', 'code' => 'GAS001', 'data' => []]);
    }

    public function getToken(Request $request) {
        [$client_id, $client_secret] = $this->getInfoInBasicAuth($request);
        //generate token
        $token = [
            'access_token' => bin2hex(random_bytes(64)),
            'refresh_token' => bin2hex(random_bytes(64)),
            'scope' => 'scope',
            'token_type' => 'Bearer',
            'expires_in' => date('Y-m-d H:i:s', strtotime('+1 year')),
        ];
        //check exist record
        $record = \DB::table('access_tokens')->where('client_id', $client_id)->where('client_secret', $client_secret)->first();
        //created
        if (! $record) {
            \DB::table('access_tokens')->insert([
                'client_id' => $client_id,
                'client_secret' => $client_secret,
                'access_token' => $token['access_token'],
                'refresh_token' => $token['refresh_token'],
                'expire_date' => $token['expires_in'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else { //update
            \DB::table('access_tokens')->where('client_id', $client_id)->where('client_secret', $client_secret)->update([
                'access_token' => $token['access_token'],
                'refresh_token' => $token['refresh_token'],
                'expire_date' => $token['expires_in'],
                'updated_at' => now(),
            ]);
        }

        return response()->json($token);
    }

    public function subscribe(Request $request)
    {
        [$client_id, $client_secret] = $this->getInfoInBasicAuth($request);
        //check exist record
        $record = \DB::table('access_tokens')->where('client_id', $client_id)->where('client_secret', $client_secret)->first();
        if ($record) {
            \DB::table('access_tokens')->where('client_id', $client_id)->where('client_secret', $client_secret)->update([
                'is_subscribe' => 1,
            ]);

            return response()->json(['status' => 'success', 'code' => 'GAS001', 'data' => []]);
        }

        return response()->json(['status' => 'error', 'code' => 'GAE001', 'data' => []]);
    }

    public function getAccount(Request $request)
    {
        return [
            'accounts' => [
                [
                    'accountId' => '101011003543',
                    'branchCode' => '101',
                    'branchName' => '法人営業部',
                    'accountTypeCode' => '01',
                    'accountTypeName' => 'usually',
                    'accountNumber' => '1003543',
                    'primaryAccountCode' => '1',
                    'primaryAccountCodeName' => '代表口座',
                    'accountName' => '法人ＡＰＩテスト口座　零零八壱',
                    'accountNameKana' => 'ﾎｳｼﾞﾝｴ-ﾋﾟ-ｱｲﾃｽﾄｺｳｻﾞ ｾﾞﾛｾﾞﾛﾊﾁｲﾁ',
                    'currencyCode' => 'JPY',
                    'currencyName' => '日本円',
                    'transferLimitAmount' => 5000000
                ]
            ]
        ];
    }

    public function getIssue(Request $request)
    {
        $vaList = [];
        for($i = 1; $i <= $request->get('issueRequestCount'); $i++) {
            $vaList[] = [
                "vaId" => $this->randomNumber(10),
                "vaBranchCode" => '継続型',
                "vaBranchNameKana" => '継続型',
                "vaAccountNumber" => $this->randomNumber(7),
                'itemKey' => date('Ymd').$this->randomNumber(10),
            ];
        }
        \DB::table('virtual_accounts')->insert($vaList);
        
        return [
            "vaTypeCode" => 2,
            "vaTypeName" => '継続型',
            "expireDateTime" => null,
            "vaHolderNameKana" => 'ﾎｳｼﾞﾝｴ-ﾋﾟ-ｱｲﾃｽﾄｺｳｻﾞ ｾﾞﾛｾﾞﾛﾊﾁｲﾁﾊﾞ-ﾁﾔﾙｲﾁ',
            'vaList' => $vaList,
        ];
    }

    public function transferFee(Request $request)
    {
        $data = $request->all();

        return [
            'accountId' => $data['accountId'],
            'baseDate' => date('Y-m-d'),
            // 'baseTime' => time(),
            'totalFee' => $data['transfers'][0]['transferAmount'],
            'transferFeeDetails' => $data['transfers']
        ];
    }

    public function balances()
    {
        return [
            'balances' => [
                [
                    'balance' => 999999999999999999999999999999999999999999999999
                ]
            ]
        ];
    }

    public function request(Request $request)
    {
        $data = $request->all();

        return [
            'accountId' => $data['accountId'],
            'resultCode' => 2,
            'applyNo' => $this->randomNumber(16),
            'applyEndDatetime' => date('YmdHis').time(). 1,
        ];
    }

    public function requestResult(Request $request)
    {
        $data = $request->all();

        return [
            'accountId' => $data['accountId'],
            'resultCode' => 1,
            'applyNo' => $this->randomNumber(16),
            'applyEndDatetime' => date('YmdHis').time(). 1,
        ];
    }

    public function getStatus(Request $request)
    {
        $data = $request->all();

        return [
            'acceptanceKeyClass' => 1,
            'baseDate' => time(),
            // 'baseTime' => 'baseTime',
            'count' => 'count',
            'transferQueryBulkResponses' => [],
            'transferDetails' => [
                [
                    'transferStatus' => 20,
                    'totalDebitAmount' => 20000,
                    'transferDetailFee' => 20000
                ]
            ]
        ];
    }
    
    /**
     * =============> SUPPORT METHOD <============================
     */

    /**
     * This function will support call api
     */
    private function process($url, $method, $params = [], $auth = [], $headers = []) {
        try{
            $client = new Client;
            $url = $url;
            $header = $headers;
            $header = array_merge($header, $auth);
            $response = $client->request($method, $url, [
                'headers' => $header,
                'json' => $params
            ]);
            return (string) $response->getBody();
        }catch(\Exception $e){
            throw new $e;
        }
    }

    private function randomNumber($n) {
        $characters = '0123456789';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    private function getInfoInBasicAuth($request) {
        //get header
        $header = $request->header();
        //get client_id & client_secret
        $authorization = base64_decode(str_replace('Basic ', '', $header['authorization'][0]));
        $split = explode(':', $authorization);
        $client_id = $split[0];
        $client_secret = $split[1];

        return [$client_id, $client_secret];
    }
}