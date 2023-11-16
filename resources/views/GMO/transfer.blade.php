<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="b2c/css/index.css">
</head>
<body>
    <div class="container">
        <section class="header">
            <div class="list-unstyled">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      振込・税金等支払
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a href="#" class="short-menu-title">振込</a></li><li><a href="/bank/transfer/once/form" class="">一括振込（入力）</a></li><li><a href="/bank/payee" class="">振込先管理</a></li><li><a href="/bank/transfer/once-upload-form" class="">一括振込（WEBアップロード）</a></li><li><a href="/bank/transfer/general/upload" class="">総合振込（WEBアップロード）</a></li><li><a href="/bank/temporarily-stored/list" class="">一時保存データから振込</a></li><!----><li><a href="/bank/pay-easy/online/inquiry" class="">ペイジー税金等支払い</a></li><li><a href="/bank/transfer/auto" class="">定額自動振込</a></li><li><a href="/bank/direct-debit/list" class="">口座振替</a></li><li><a href="/bank/refund/incoming/menu" class="">組戻し</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
            </div>
        </section>

        <section class="main">

            <p class="main-title">
                振込内容の入力
            </p>
            
            <div class="register-top">
                <div class="row">
                    <div class="left col-2">
                        振込先
                    </div>
                    <div class="right col-10">
                        <form method="POST">
                            <div class="panel">
                                <div class="item-panel">
                                    <label>金融機関情報</label>
                                    <div class="content-wrapper horizontal">
                                        <p>
                                            ＧＭＯあおぞらネット銀行 あじさい支店
                                        </p>
                                        <button type="button" class="button-ghost button-sm">変更</button>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>科目</label>
                                    <div class="content-wrapper horizontal">
                                        <p>
                                            普通
                                        </p>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>口座番号</label>
                                    <div class="content-wrapper horizontal">
                                        <span class="input-wrapper">
                                            <span>
                                                <input type="text" pattern="\d*" placeholder="" maxlength="7" class="input-s" data-gtm-form-interact-field-id="1">
                                            </span>
                                            <button type="button" disabled="disabled" class="button-sm post button-ghost">受取人名の表示</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>受取人名</label>
                                </div>

                                <div class="item-panel">
                                    <label>振込金額</label>
                                    <div class="content-wrapper content-wrapper-change">
                                        <div class="horizontal-top">
                                            <div class="input-wrapper">
                                                <input data-v-bc6b7aee="" type="text" placeholder="¥やカンマ（,）は除いて数字を入力" maxlength="15" class="num input-amount input-mm">
                                                <div class="unit post">円</div>
                                            </div>
                                        </div>
                                        <div class="horizontal-bottom">
                                            <div class="text-right">
                                                <span>振込限度額（1日）</span>
                                                <span class="num">100,000,000</span>
                                                <span class="unit">円</span><span> / </span><span class="num">100,000,000</span><span class="unit">円</span>
                                            </div>
                                            <div class="text-right">
                                                <button type="button" class="button-minimum button-ghost">振込限度額変更</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>手数料負担</label>
                                    <div class="content-wrapper content-wrapper-change">
                                        <div class="horizontal-top">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                                <label class="form-check-label" for="inlineRadio3">当方</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                                <label class="form-check-label" for="inlineRadio3">先方</label>
                                            </div>
                                        </div>
                                        <div class="horizontal-bottom">
                                            <p>
                                                ※「先方」を選択すると振込金額から手数料を差し引いて振込されます。
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>振込無料回数の利用</label>
                                    <div class="content-wrapper content-wrapper-change">
                                        <div class="horizontal-top">
                                            <div class="form-check form-check-inline" style="width: fit-content;">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                                <label class="form-check-label" for="inlineRadio3">利用しない</label>
                                            </div>
                                            <div class="form-check form-check-inline" style="width: fit-content;">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                                <label class="form-check-label" for="inlineRadio3">利用する</label>
                                            </div>
                                        </div>
                                        <p>
                                            当社あて振込のため振込手数料は無料です。
                                        </p>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>手数料負担</label>
                                    <div class="content-wrapper content-wrapper-change">
                                        <div class="horizontal-top">
                                            <input type="date">
                                        </div>
                                        <div class="horizontal-bottom">
                                            <p>
                                                ※平日午後3時以降および休日の他行宛の当日振込は、お受取人さまの金融機関・口座状態によっては翌営業日扱いとなる場合があります。
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-panel">
                                    <label>
                                        <span>EDI情報</span>
                                        <span class="mark option" style="text-align: right;">任意</span>
                                    </label>
                                    <div class="content-wrapper content-wrapper-change">
                                        <input type="text">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="register-bottom">
                <div class="row">
                    <div class="left col-2">
                        出金口座
                    </div>
                    <div class="right col-10">
                        <div class="panel">
                            <div class="item-panel">
                                <label>
                                    <span>口座情報</span>
                                </label>
                                <div class="content-wrapper content-wrapper-change">
                                    <div class="horizontal-top">
                                        <p>
                                            法人第二営業部　普通　1002458
                                        </p>
                                    </div>
                                    <div class="horizontal-bottom">
                                        <p>
                                            残高947,576,288円
                                        </p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="item-panel">
                                <label>
                                    <span>依頼人名</span>
                                </label>
                                <div class="content-wrapper content-wrapper-change">
                                    <div class="horizontal-top">
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">

        </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
