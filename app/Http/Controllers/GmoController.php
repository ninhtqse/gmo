<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class GmoController extends Controller
{
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
        return response()->json([
            'access_token' => bin2hex(random_bytes(16)),
            'refresh_token' => bin2hex(random_bytes(16)),
            'scope' => 'scope',
            'token_type' => 'token_type',
            'expires_in' => 'expires_in',
        ]);
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
            ];
        }
        return [
            "vaTypeCode" => 2,
            "vaTypeName" => '継続型',
            "expireDateTime" => null,
            "vaHolderNameKana" => 'ﾎｳｼﾞﾝｴ-ﾋﾟ-ｱｲﾃｽﾄｺｳｻﾞ ｾﾞﾛｾﾞﾛﾊﾁｲﾁﾊﾞ-ﾁﾔﾙｲﾁ',
            'vaList' => $vaList,
        ];
    }

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
            dd($e->getMessage());
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
}