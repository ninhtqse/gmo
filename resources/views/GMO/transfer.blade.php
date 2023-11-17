<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMOあおぞらネット銀行</title>
    <link rel="stylesheet" href="b2c/css/transfer.css">
    <style>
        .hidden{
            display: none
        }
    </style>
</head>

<body>
    <section class="transfer-input page">
        <header id="header">
            <section class="header-top">
                <div class="container">
                    <section class="header-top smartphone-only">
                        <div class="container">
                            <div class="smartphone-only sp-header-cover"><input id="nav-input" type="checkbox"
                                    class="nav-unshown"><label for="nav-input" class="nav-open"><img
                                        src="/static/img/menu.svg"></label><a href="/bank"
                                    class="logo router-link-active"><img src="/static/img/logo-sp.svg"></a><label
                                    id="nav-close" for="nav-input" class="nav-unshown"><img src="/static/img/close.svg"
                                        class="button-close"></label>
                                <div id="nav-content">
                                    <div class="sp-menu-top">
                                        <div class="icon-group"><a href="#" class="agrees-list"><img
                                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/chacked.svg"></a><a
                                                href="/bank/notices/important" class="notices"><img
                                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/notices.svg"></a><a
                                                href="/bank/contact-list" class="contact"><img
                                                    src="/static/img/contact-sp.svg"></a></div>
                                        <div><a href="/bank/customer-information/settings" class=""><span
                                                    class="username-wrapper"><span
                                                        class="username">法人ＡＰＩテスト口座　零零八弐</span>さま</span></a></div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li class="menu-target no-sub"><a href="/bank"
                                                class="router-link-active">ホーム</a>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">振込・税金等支払</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="#">振込</a></li>
                                                <li><a href=""><span>一括振込</span><span class="sub-text">入力</span></a>
                                                </li>
                                                <li><a href="">振込先登録</a></li>
                                                <!---->
                                                <li><a href="/bank/pay-easy/online/inquiry" class="">ペイジー税金等支払い</a></li>
                                                <li><a href="">定額自動振込</a></li>
                                                <li><a href="">口座振替</a></li>
                                                <li><a href="">組戻し</a></li>
                                            </ul>
                                        </li>
                                        <!---->
                                        <li class="menu-target"><a href="#" class="">残高・明細・振込状況</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="">残高照会</a></li>
                                                <li><a href="">入出金明細</a></li>
                                                <li><a href=""><span>振込状況照会</span><span
                                                            class="sub-text">振込／一括／総合</span></a>
                                                </li>
                                                <li><a href=""><span>申請・承認一覧</span><span
                                                            class="sub-text">振込／一括／総合</span></a></li>
                                                <li><a href="/bank/pay-easy/payment/history" class="">ペイジー払込履歴照会</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">デビットカード</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="/bank/customer-information/cash-card-atm"
                                                        class="">カード基本設定</a>
                                                </li>
                                                <li><a href="/bank/withdrawal-details/debit" class="">デビット入出金明細</a></li>
                                                <li><a href="/bank/add-or-change-debit"
                                                        class="">カード追加（追加口座開設）<br>・カード国際ブランド切替</a></li>
                                                <li><a href="/bank/credit-loan/later-payment/contract"
                                                        class="">デビット後払いオプション</a></li>
                                                <!---->
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">ローン</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="">あんしんワイド</a></li>
                                                <li><a href="">あんしん10万円</a></li>
                                                <li>
                                                    <!---->
                                                </li>
                                                <li>
                                                    <!---->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">海外送金</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="#">新規送金</a></li>
                                                <li><a href="#">送金状況照会・書面発行</a></li>
                                                <li><a href="#">申請・承認一覧</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">円定期</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href=""><span>残高照会</span><span
                                                            class="sub-text">新規預入・変更・解約</span></a>
                                                </li>
                                                <li><a href="">入出金明細</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="short-menu-title">外貨</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href=""><span>残高照会</span><span
                                                            class="sub-text">新規購入・売却・新規積立</span></a></li>
                                                <li><a href="">入出金明細</a></li>
                                                <li><a href="">実現損益</a></li>
                                                <li class="sub-menu-target"><a href="#" class="">新規外貨積立</a>
                                                    <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                        <li><a href="#">米ドル</a></li>
                                                        <li><a href="#">ユーロ</a></li>
                                                        <li><a href="#">英ポンド</a></li>
                                                        <li><a href="#">豪ドル</a></li>
                                                        <li><a href="#">NZドル</a></li>
                                                        <li><a href="#">カナダドル</a></li>
                                                        <li><a href="#">スイスフラン</a></li>
                                                        <li><a href="#">南アフリカランド</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=""><span>注文一覧</span><span
                                                            class="sub-text">積立中止・変更</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">FX取引</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="#"><span>FX口座情報</span><span
                                                            class="sub-text">新規決済</span></a>
                                                </li>
                                                <li><a href="/bank/fx-account/transfer" class="">振替</a></li>
                                                <li><a href="/bank/fx-account/fx-report-list" class="">FX電子帳票</a></li>
                                            </ul>
                                        </li>
                                        <!---->
                                        <!---->
                                        <li class="menu-target"><a href="#" class="">振込入金口座</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href=""><span>契約一覧</span><span
                                                            class="sub-text">新規契約・口座発行</span></a>
                                                </li>
                                                <li><a href=""><span>口座照会</span><span
                                                            class="sub-text">停止・再開・削除</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-target"><a href="#" class="">ポイント・キャンペーン</a>
                                            <ul class="sub-menu-list list-unstyled" style="display: none;">
                                                <li><a href="">ポイント・キャンペーン一覧</a></li>
                                                <li><a href="">ポイント設定</a></li>
                                                <li><a href="">ポイント履歴</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled customer-info">
                                        <li class="menu-target"><a href=""><i class="icon-account-circle"></i>
                                                お客さま情報（申込・設定）
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-card"></i>
                                                カード・ATM
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-security"></i>
                                                セキュリティ
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-info"></i>
                                                メール・通知
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-download2"></i>
                                                ファイル出力
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-document"></i>
                                                書面発行（残高証明書等）
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-fx-form"></i>
                                                FX電子帳票
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-history"></i>
                                                ログイン履歴
                                            </a></li>
                                        <li class="menu-target"><a href=""><i class="icon-business-id"></i>
                                                <div>
                                                    <div>ビジネスID管理</div>
                                                    <div>（電子証明書発行）</div>
                                                </div>
                                            </a></li>
                                        <li class="menu-target"><a
                                                href="https://d04.dev-gmo-aozora.com/support/guide.html"
                                                target="_blank"><i class="icon-guide-sp"></i>
                                                ガイド一覧
                                            </a></li>
                                    </ul>
                                    <div class="button-logout-wrapper"><button type="button"
                                            class="button-logout"><a href="{{route('logout')}}">ログアウト</a></button></div>
                                </div>
                            </div>
                        </div>
                    </section><a href="/bank" class="logo router-link-active"><img
                            src="https://d04.dev-bank.gmo-aozora.com/static/img/logo-pc.svg"
                            class="desktop-only banner-pc"></a>
                    <div class="user desktop-only flex">
                        <div href="" class="user-info"><a href="#" class="desktop-only agrees-list"><img
                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/chacked.svg"></a><a
                                href="/bank/notices/important" class="desktop-only notices"><img
                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/notices.svg"></a><a
                                href="/bank/contact-list" class="desktop-only contact"><img
                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/contact.svg"></a><a
                                href="https://d04.dev-gmo-aozora.com/support/guide.html" target="_blank"
                                class="desktop-only guide"><img
                                    src="https://d04.dev-bank.gmo-aozora.com/static/img/guide.svg"></a><span
                                class="username-wrapper"><span
                                    class="username">法人ＡＰＩテスト口座　零零八弐</span><span>さま</span></span>
                            <div class="datetime">2023/11/17 00:11</div>
                        </div>
                        <div><a href="{{route('logout')}}"><button type="button" class="button-login">ログアウト</button></a></div>
                    </div>
                </div>
            </section>
            <section class="header-sub desktop-only">
                <div class="container">
                    <div class="common">
                        <ul class="list-unstyled">
                            <li class="menu-target"><a href="/bank/transfer/once/form" class="">振込・税金等支払</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="#" class="short-menu-title">振込</a></li>
                                    <li><a href="/bank/transfer/once/form" class="">一括振込（入力）</a></li>
                                    <li><a href="/bank/payee" class="">振込先登録</a></li>
                                    <li><a href="/bank/transfer/once-upload-form" class="">一括振込（WEBアップロード）</a></li>
                                    <li><a href="/bank/transfer/general/upload" class="">総合振込（WEBアップロード）</a></li>
                                    <li><a href="/bank/temporarily-stored/list" class="">一時保存データから振込</a></li>
                                    <!---->
                                    <li><a href="/bank/pay-easy/online/inquiry" class="">ペイジー税金等支払い</a></li>
                                    <li><a href="/bank/transfer/auto" class="">定額自動振込</a></li>
                                    <li><a href="/bank/direct-debit/list" class="">口座振替</a></li>
                                    <li><a href="/bank/refund/menu" class="">組戻し</a></li>
                                </ul>
                            </li>
                            <!---->
                            <li class="menu-target"><a href="/bank/balance-inquiry/deposit-balance/normal"
                                    class="">残高・明細<br>・振込状況</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/balance-inquiry/deposit-balance/normal" class="">残高照会</a></li>
                                    <li><a href="/bank/withdrawal-details/normal" class="">入出金明細</a></li>
                                    <li><a href="/bank/transfer/history/list" class="">振込状況照会（振込／一括／総合）</a></li>
                                    <li><a href="/bank/transfer/admission/list" class="">申請・承認一覧（振込／一括／総合）</a></li>
                                    <li><a href="/bank/pay-easy/payment/history" class="">ペイジー払込履歴照会</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="#">デビット<br>カード</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/customer-information/cash-card-atm" class="">カード基本設定</a></li>
                                    <!---->
                                    <li><a href="/bank/withdrawal-details/debit" class="">デビット入出金明細</a></li>
                                    <li><a href="/bank/add-or-change-debit" class="">カード追加（追加口座開設）・カード国際ブランド切替</a></li>
                                    <li><a href="/bank/credit-loan/later-payment/contract" class="">デビット後払いオプション</a>
                                    </li>
                                    <!---->
                                </ul>
                            </li>
                            <li class="menu-target"><a href="#">ローン</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/credit-loan/home/data-accumulation" class="">あんしんワイド</a></li>
                                    <li><a href="/bank/credit-loan/home/one-hundred-thousand-yen" class="">あんしん10万円</a>
                                    </li>
                                    <li>
                                        <!---->
                                    </li>
                                    <li>
                                        <!---->
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="#">海外送金</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="#">新規送金</a></li>
                                    <li><a href="#">送金状況照会・書面発行</a></li>
                                    <li><a href="#">申請・承認一覧</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="/bank/balance-inquiry/deposit-balance/fixed"
                                    class="">円定期</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/balance-inquiry/deposit-balance/fixed"
                                            class="">残高照会（新規預入・変更・解約）</a>
                                    </li>
                                    <li><a href="/bank/withdrawal-details/fixed" class="">入出金明細</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="/bank/balance-inquiry/deposit-balance/foreign"
                                    class="short-menu-title">外貨</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/balance-inquiry/deposit-balance/foreign"
                                            class="">残高照会（新規購入・売却・新規積立）</a></li>
                                    <li><a href="/bank/withdrawal-details/foreign" class="">入出金明細</a></li>
                                    <li><a href="/bank/losses-gains" class="">実現損益</a></li>
                                    <li class="sub-menu-target"><a href="#">新規外貨積立</a>
                                        <ul class="sub-menu-list list-unstyled">
                                            <li><a href="#">米ドル</a></li>
                                            <li><a href="#">ユーロ</a></li>
                                            <li><a href="#">英ポンド</a></li>
                                            <li><a href="#">豪ドル</a></li>
                                            <li><a href="#">NZドル</a></li>
                                            <li><a href="#">カナダドル</a></li>
                                            <li><a href="#">スイスフラン</a></li>
                                            <li><a href="#">南アフリカランド</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/bank/foreign-reserve-trade/list" class="">注文一覧（積立中止・変更）</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="#" class="with-icon">FX取引</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="#" class="with-icon">FX口座情報（新規決済・振替履歴）</a></li>
                                    <li><a href="/bank/fx-account/transfer" class="short-menu-title">振替</a></li>
                                    <li><a href="/bank/fx-account/fx-report-list" class="">FX電子帳票</a></li>
                                </ul>
                            </li>
                            <!---->
                            <!---->
                            <li class="menu-target"><a href="/bank/virtual-accounts/list/contract" class="">振込入金口座</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/virtual-accounts/list/contract" class="">契約一覧（新規契約・口座発行）</a></li>
                                    <li><a href="/bank/virtual-accounts/list/inquiry" class="">口座照会（停止・再開・削除）</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="/bank/campaigns/rank" class="">ポイント<br>・キャンペーン</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/campaigns/rank" class="">ポイント・キャンペーン一覧</a></li>
                                    <li><a href="/bank/points/company-info" class="">ポイント設定</a></li>
                                    <li><a href="/bank/points/history" class="">ポイント履歴</a></li>
                                </ul>
                            </li>
                            <li class="menu-target"><a href="/bank/customer-information/settings"
                                    class="">お客さま情報<br>（申込・設定）</a>
                                <ul class="sub-menu-list list-unstyled">
                                    <li><a href="/bank/customer-information/cash-card-atm" class="">カード・ATM</a></li>
                                    <li><a href="/bank/customer-information/security" class="">セキュリティ</a></li>
                                    <li><a href="/bank/customer-information/mail-notification" class="">メール・通知</a></li>
                                    <li><a href="/bank/withdrawal-details/output-files/normal" class="">ファイル出力</a></li>
                                    <li><a href="/bank/certificate-issue/list" class="">書面発行（残高証明書等）</a></li>
                                    <li><a href="/bank/fx-account/fx-report-list" class="">FX電子帳票</a></li>
                                    <li><a href="/bank/login-history" class="">ログイン履歴</a></li>
                                    <li><a href="/bank/user-manager/list/group" class="">ビジネスID管理（電子証明書発行）</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </header>
        <section id="root" class="content block-container">
            <header>
                <h2>振込内容の入力</h2>
            </header>
            <div class="error-messages">
                <div class="hidden not-found-account-number">ご指定の口座へのお振込ができません。受取人さまにご確認ください</div>
            </div>
            <!---->
            <div class="block">
                <header>
                    <h3>振込先</h3>
                </header>
                <div class="panel inner-block">
                    <div class="panel-body">
                        <form id="form-transfer" class="horizontal simple" method="POST">
                            @csrf
                            <div><label>金融機関情報</label>
                                <div class="content-wrapper horizontal">
                                    ＧＭＯあおぞらネット銀行 あじさい支店
                                    <button type="button" class="button-ghost button-sm">変更</button></div>
                            </div>
                            <div><label>科目</label>
                                <div class="content-wrapper several-select-wrapper">
                                    <div>普通</div>
                                </div>
                            </div>
                            <div><label>口座番号</label>
                                <div class="content-wrapper"><span class="input-wrapper"><span>
                                            <input id="input-account-number" name="account_number" type="text" pattern="\d*" placeholder="" maxlength="7"
                                                class="input-s"></span>
                                            <button id="btn-search-account-number" type="button" disabled="disabled"
                                            class="button-sm post button-ghost">受取人名の表示</button></span></div>
                            </div>
                            <div><label>受取人名</label>
                                <div class="content-wrapper">
                                    <div class="input-recipient-name"></div>
                                </div>
                            </div>
                            <div><label>振込金額</label>
                                <div class="content-wrapper">
                                    <div class="horizontal block-mobile">
                                        <div class="input-wrapper"><input data-v-bc6b7aee="" type="text"
                                                placeholder="¥やカンマ（,）は除いて数字を入力" maxlength="15"
                                                name="amount"
                                                class="num input-amount input-mm">
                                            <div class="unit post">円</div>
                                        </div>
                                    </div>
                                    <div class="text-right"><span>振込限度額（1日）</span><span
                                            class="num">100,000,000</span><span class="unit">円</span><span> /
                                        </span><span class="num">100,000,000</span><span class="unit">円</span></div>
                                    <div class="text-right"><button type="button"
                                            class="button-minimum button-ghost">振込限度額変更</button></div>
                                </div>
                            </div>
                            <div id="fee-pay-type-column"><label class="">
                                    手数料負担<i class="icon-help"></i></label>
                                <div class="content-wrapper">
                                    <div class="horizontal">
                                        <div class="block-mobile several-select-wrapper"><span
                                                class="input-radio checked disabled"><input
                                                    id="radio-170013057842270139" type="radio" name="first"
                                                    disabled="disabled" value="1"><label
                                                    for="radio-170013057842270139">当方
                                                </label></span><span class="input-radio disabled"><input
                                                    id="radio-17001305784226522" type="radio" name="first"
                                                    disabled="disabled" value="2"><label
                                                    for="radio-17001305784226522">先方
                                                </label></span></div>
                                        <div class="disclaimer">
                                            ※「先方」を選択すると振込金額から手数料を差し引いて振込されます。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div><label>振込無料回数の利用</label>
                                <div class="content-wrapper">
                                    <div class="horizontal">
                                        <div class="block-mobile several-select-wrapper"><span
                                                class="input-radio checked disabled"><input
                                                    id="radio-170013057842249653" type="radio" name="first"
                                                    disabled="disabled" value="0"><label for="radio-170013057842249653">
                                                    利用しない
                                                </label></span><span class="input-radio columns-radio disabled"><input
                                                    id="radio-170013057842253085" type="radio" name="first"
                                                    disabled="disabled" value="1"><label for="radio-170013057842253085">
                                                    利用する
                                                    <!----></label></span></div>
                                        <!---->
                                        <div class="text-right">
                                            <div>当社あて振込のため振込手数料は無料です。</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div><label>振込日</label>
                                <div class="content-wrapper">
                                    <div class="input-wrapper block"><span data-v-5bfcce35="" class="datepicker">
                                            <!---->
                                            <!----><input data-v-5bfcce35="" type="text" pattern="\d*" maxlength="8"
                                                data-input="" class="input-s simple flatpickr-input"><a
                                                data-v-5bfcce35="" class="button datepicker-toggle"><i
                                                    data-v-5bfcce35="" class="icon-calendar"></i></a>
                                            <!----></span></div>
                                    <div class="disclaimer">
                                        ※平日午後3時以降および休日の他行宛の当日振込は、お受取人さまの金融機関・口座状態によっては翌営業日扱いとなる場合があります。
                                    </div>
                                </div>
                            </div>
                            <div><label><span>EDI情報</span><span class="mark option">任意</span></label>
                                <div class="content-wrapper"><input type="text" maxlength="20" placeholder="20文字以内"
                                        class="edi-info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="block">
                <header>
                    <h3>出金口座</h3>
                </header>
                <div class="panel inner-block">
                    <div class="panel-body">
                        <form class="horizontal simple">
                            <div><label>口座情報</label>
                                <div class="content-wrapper">
                                    <div class="horizontal">
                                        <div>
                                            <div>法人第二営業部　普通　1002458</div>
                                            <div><span>残高</span><span class="num">947,576,288</span><span
                                                    class="unit">円</span>
                                                <!---->
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div><label>依頼人名</label>
                                <div class="content-wrapper">
                                    <div class="flex"><span><input type="text" name="" placeholder="アオゾラ タロウ"
                                                maxlength="48" class="input-lg-m"></span><a
                                            href="https://d04.dev-faq.gmo-aozora.com/faq_detail.html?id=100011"
                                            target="_blank" class="link-nav">使用可能文字について</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bottom-buttons"><button type="button" class="back button-lg">キャンセル</button><button id="btn-transfer" type="button"
                    class="button-lg button-lg-m button-secondary">確認</button></div>
            <div class="disclaimer">
                <div>＜ご注意＞</div>
                <ul>
                    <li>他行宛振込で振込日に翌営業日以降を指定した場合、振込予約扱いとなります。この場合、振込金額および振込手数料は振込予定日に引落されます。</li>
                    <li>入金時間は振込先金融機関の入金処理時間により異なります。また、振込先の入力に誤りがあると、振込先金融機関で入金ができずに資金が返却される場合があります。</li>
                    <li>表示されている残高・振込無料回数・保有ポイント数は、本画面へ遷移した時点の情報のため、実際の振込実行時点の内容とは異なる場合があります。</li>
                    <li>複数件振込が重なる場合、他の振込にポイント利用が優先される場合があります。</li>
                    <li>受取人名の確認ができない時間帯や口座が確認できない金融機関の場合には、受取人名の表示機能がご利用いただけません。また、受取人名の表示を一定回数以上繰り返し行った場合にも、受取人名の表示機能がご利用いただけなくなります。使用可能文字をご確認のうえ、お客さまご自身で受取人名（全角カナ英数）を入力してください。
                    </li>
                    <li>受取人名は、一文字でも異なっていると受取人の口座に入金されません。正確な受取人名がわからない場合は、必ず事前にお受取人様にご確認ください。</li>
                    <li>振込を日付が変わる時間帯で行うと振込が受付けられない場合がありますので、振込の受付状況を必ず振込状況照会でご確認ください。</li>
                </ul>
            </div>
        </section>
        <!---->
        <footer data-v-09dcbaca="" id="footer">
            <div data-v-09dcbaca="" class="container">
                <div data-v-09dcbaca="" class="link-block-corp"><a data-v-09dcbaca=""
                        href="https://gmo-aozora.com/business/contents/interest.html" target="_blank">金利</a><a
                        data-v-09dcbaca="" href="https://gmo-aozora.com/business/contents/fee.html"
                        target="_blank">手数料</a><a data-v-09dcbaca="" href="https://faq.gmo-aozora.com"
                        target="_blank">よくあるご質問</a><a data-v-09dcbaca="" href="https://gmo-aozora.com/company/"
                        target="_blank">会社情報</a><a data-v-09dcbaca="" href="https://gmo-aozora.com/policy/"
                        target="_blank">各種方針</a><a data-v-09dcbaca=""
                        href="https://gmo-aozora.com/policy/resolve-complaints.html" target="_blank">苦情・紛争解決機関</a><a
                        data-v-09dcbaca="" href="https://gmo-aozora.com/provision/" target="_blank">規定・約款一覧</a><a
                        data-v-09dcbaca="" href="https://gmo-aozora.com/information/attention.html"
                        target="_blank">金融犯罪の注意喚起</a><a data-v-09dcbaca="" href="https://gmo-aozora.com/security/"
                        target="_blank">セキュリティ対策</a><a data-v-09dcbaca=""
                        href="https://gmo-aozora.com/support/guide.html" target="_blank">ガイド一覧</a></div>
                <div data-v-09dcbaca="" class="copyright">GMOあおぞらネット銀行株式会社 <br data-v-09dcbaca=""
                        class="smartphone-only">登録金融機関 関東財務局長（登金）第665号<br data-v-09dcbaca="" class="smartphone-only">
                    一般社団法人
                    金融先物取引業協会加入</div>
                <div data-v-09dcbaca="" class="copyright">Copyright © GMO Aozora Net Bank, Ltd. All Rights Reserved.
                </div>
            </div>
        </footer>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#input-account-number').on('keyup change', function (e) {
        let value = e.target.value;
        if (value.length >= 6) {
            $('#btn-search-account-number').removeAttr('disabled')
        } else if (value.length < 6) {
            let attr = $('#btn-search-account-number').attr('disable');
            if (typeof attr == 'undefined') {
                $('#btn-search-account-number').attr("disabled","disabled");
            }
        }
    })

    $('body').on('click', '#btn-search-account-number', function () {
        $.get(`/api/v1/verify_account_number/${$('#input-account-number').val()}`, function(data){
            let status = data.status;
            if (status === 'error') {
                $('.not-found-account-number').removeClass('hidden');
            } else {
                $('.not-found-account-number').addClass('hidden');
                let virtual_account = data.data.virtual_account;
                $('.input-recipient-name').html('factorx')
            }
        });
    });

    $('body').on('click', '#btn-transfer', function () {
        $('#form-transfer').submit();
    })
</script>

</html>
