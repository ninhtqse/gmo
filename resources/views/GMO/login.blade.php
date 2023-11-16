
<!DOCTYPE HTML><html lang="ja">

<head>
    <meta charset="utf-8"/><meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>GMOあおぞらネット銀行　ログイン</title>
    <meta name="description" content="GMOあおぞらネット銀行"/><meta name="keywords" content="GMOあおぞらネット銀行"/><link rel="stylesheet" type="text/css" media="all" href="./b2c/css/reset.css"/><link rel="stylesheet" type="text/css" media="all" href="./b2c/css/login-corp.css?20220910"/><link rel="stylesheet" type="text/css" media="all" href="./b2c/css/banner.css?20220813" /><link rel="shortcut icon" href="./b2c/favicon.ico"><script src="./b2c/js/jquery-3.2.1.min.js"></script>
    <script src="./b2c/js/henkan.js"></script>
    <script src="./b2c/js/sso.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102344297-1"></script>
    <script>
      /*<![CDATA[*/
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', "UA-102344297-1", {
        'linker': {
          'domains': ['gmo-aozora.com', 'bank.gmo-aozora.com', 'faq.gmo-aozora.com', 'search.gmo-aozora.com']
        }
      });
      /*]]>*/
    </script>
    
    <script>
      /*<![CDATA[*/
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer',"GTM-N54H5VF");
      /*]]>*/
    </script>
    
</head>

<body class="bg">
    <noscript>
        
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N54H5VF" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        
        <div class="noscript">大変申し訳ありませんが、口座開設申込はJavaScriptが利用可能なブラウザのみのご利用に限定させて頂いております。JavaScriptが利用可能なブラウザにて、再度お試しください。</div>
    </noscript>
    <header>
        <div class="container clearfix">
            <div class="col-child">
                <a href="https://stg.gmo-aozora.com/"><img class="logo" src="./b2c/images/logo.png" alt="GMOあおぞらネット銀行" /></a>
            </div>
        </div>
    </header>

    <section id="app" class="content">
        <div class="panel-wrapper">
            <div class="panel">
                <div>
                    <header class="header-accent with-link">
                        <h1 class="login-bold">ログイン（法人）</h1>
                        <a href="" class="link-arrow" id="login-link">個人・個人事業主のお客さまはこちら</a>
                    </header>
                    <script>
                      window.onload = function () {
                        var url = "https:\/\/d04.dev-sso.gmo-aozora.com\./b2c\/login";
                        replaceLink(url)
                      };
                    </script>
                </div>
                <form method="post" id="fm1" autocomplete="off">
                    <div class="panel-body">
                        <div class="certicifate-wrapper">
                            <!-- PC版説明表示 --><p class="certicifate-description desktop-only">ビジネスID管理サービスをご利用で、電子証明書を発行しているお客さま</p>
                            <!-- スマホ版説明表示 --><p class="certicifate-description smartphone-only">ビジネスID管理サービスをご利用で、<br>電子証明書を発行しているお客さま</p>

                            <div class="button-wrapper">
                                <button type="button" class="large button-secondary" onclick="jumpTo(&#39;https://d04.cert.dev-sso.gmo-aozora.com/corp./b2c/login&#39;)">電子証明書でログイン</button>
                            </div>
                        </div>
                        <div class="input-wrapper">
                            <div>
                                <div class="text-description">ログインID</div>
                                <input type="text" name="username" maxlength="20" size="16" value="" placeholder="ログインIDまたはログイン名"
                                       id="username"
                                       tabindex="1" /></div>
                        </div>
                        <div class="input-wrapper">
                            <div class="text-description">ログインパスワード</div>
                            <div>
                                <input type="password" name="password" maxlength="10" size="16" value="" placeholder="6～10文字の半角英数記号"
                                       id="password"
                                       tabindex="2" /></div>
                        </div>
                        <div class="button-wrapper">
                            <button type="submit" class="button-primary"
                                    tabindex="3">ログイン</button>
                        </div>
                    </div>
                    <input type="hidden" name="execution" value="494da428-3db9-4b47-a640-0b6219905fb9_ZXlKaGJHY2lPaUpJVXpVeE1pSjkuWm1kTWFIWXZkSEZOY2psSlpHeG5WREZHV2poMlNWaHhkVVZYY1U4eFZreGFhblJzTmpObk5tTnNTQzlZUlRGblJscGxRbWxWV25GRGRqaFRXSEpVTWtaaWNrMTBRa2M0TjA5c1pXRkRNVnBYYkZOd01IUkthMUYyWmtOU2IxbGpNbkZZSzBOYVMzRnZUalprZDNOcGVsbDVOM1J2Y2s0eFEzQTJVbFZTU1Vab1QwcE5TR3h1WXk5TFFUVjRkRk5CWmtSNk1UQkNhelJPTkRoWVEwVlJSMEpSZEhCYVdrTlFlRlptWm5kaVlrSjBaMkZ3ZG01SFJqUm1UbTFUVkhWM1lrTnZOMlJ4U214M00xZGhWRXBZT0d0MlZpOW5aVmhVWm1sR1NGRk5UMEUzTlhkS1pXZHdNbmRJZEZaeU1tTTRiekJwUldWeFZtZGpRblFyYTNaNWRtSlJWRWRzWkhsSGRUWXhLemxLUWt0UFdrSjNUQzlKVTJ4YWIyNVNjMDAyT0ZGUlRGVklVUzh3VlVaQlEydFVNRVl6ZGk4d1prTTVVVW95VG1sR1FTdGFia2R3YmxOSk4wOUdhMGRUYWxkNlMweGtTMGszY1hCSU5GcHVOV2hXVFVoMGMxRlFkR05FWTFocVRuRk1SMjVyTW1aRFZFbHdSREZzS3pBNFRVdGpaVWxYVVdkcWVXWm1iR3czVDNscVNXbExSV2xOVVhZeGNFOVlXalZFZWtkdVkyVTJZbG8yTWtoYVNYTllabVUzYWxwcVNuaFdVMEU1U1dReVRWQnhiVGdyVVhGekwySmlTamM0TjA5aVJGbDJNakF2VmpCS2RuZEJiMG81T1hWWlozTnNNVU5oWVZSVVYybzNTRXREU3pKNldFRmhiemRUWXpoS1dYSlFWVFI0Vmt4Qk1HaFJOR3BzY1U5YVFuRXpSakZNWVhweWEycHlkU3R4VmpWV1lrODJjMWhpWlV4MmIwOXpOakpDWWl0Q1VVOTVSaTlUV213Mk5saHpSakJrVkZGS1VIZGxZbGh2TDFWVFkzWTVaRTlMUkhoTWRHYzVTMXBKVWtwTmRtdFdZMmQ0WkhKdVlUbFhjVU5JT1ZkeVpHOUNRMFpGVTNSS1ZtZDJORk50VFVSUk16TmliM2Q1TWpkSmRVaHJSRU5TYWtoR2VuY3dSMDU0Y2paek9Fa3lRV050V0dKd1UxZzBNbXhqWjA1TWVFTndMMkZ1WVdkdll6WTFibVJ6UlM5QmJ6SnZkV2N3WldkNVZ6UjBOMWxOVkZvclZHWlBRMlZLWVhaUmNVdGhhRXh0UlRJeWF6Rk5VMlY2ZVRsdGJ5dHRlbGxTTVZFek0wb3hiV2hLYlhwbVpsUXdaR1JxT0VOd00zSkVLMnRLU3pGS2RVbzVSWFpOUVROQ1dpdEZRM1ppWXpBd2RsTjBXSEJhY2xodVJUVlBiMklyUWpac1UzaHNjMWRYVlRob1ZubHhaVkpUVVZSR1pqVjNaa3hJWkVwa1ptVnZURVJaWmxwWWRXTXJaekYxVjBkQmFtOUxUV1pOVEc1aGJXMHlSVzFGYmtRelprNTNialpSY0VWWVFrWXlaa2xXTDNoMVdVY3pNV1pYWlZGcU1Ga3lUR1Z0YnpaQ05rZzFTa0Y0WlRKeFpGbzJjMmh1Y0ZZM1V6a3liVmQ0WXpKT1pHNHpkWGw1T0haNk9DdFliSFl3YzBOV2VYZzFZbkJSWlRoakx6QlBjMDFVUm1wb1dWVndXRFJGZG5scmEyTkphU3R4VmxCc1FqaHdURGhQY0ZwS09FcHBRMDFSZGk5QmNIcDNjVm92YVRodGVXbE5XalIxV1ZaaVEydE9abkUzUlhvclJHcG9NMXA1Yldwa2FGSkxRa00yVkc1SFkxRkhNWGg1VUhjMmNHSkpha1ZxV0cxalNITlpjMlZrYkdwWFlscFBUblpLTTFkNE1EZFFabUp4YURKaWNWZHVTRzVwZWpneWFYQlFOM0ZIVXpZNE9FcHdRbWd6ZUU1Rll6RXpVbm96V1U5VU9USklaRk50TW1ONk0wSmxXV000ZFZoNVpXRkVPR3R6WlZGVFQwRmpaa1kxZFhOcVVtcG9aMjhyVUZsR05WSnZlakZvUzJ0alVWcFJRaTl1TjFOaGIyOVFTRzh6TkRSWGFGaE9Sa3QzWm5OV2MwZHdVVEJ1UW14Qk1IQnVTRVZXZG5aSGRrWkRjRzFIY0RWRWJVbGhVMjkxVldWRmJrUnJkbU5UTVV4aVQzZHdiaXQxUmxGMFJrNWliR3M0T1RKWVJqZzRjazVUY0ZaRFZIRTBUSEZQZGpGRE0xUjRXVWxGWVVabVVXVnVZVXQyY0RaNVIwNUxPSEF4WW1OTGVqbE5NalV3YXk5RlVqTlNMMFZZYzNSVlNVWlplRlYzUWxWeVdXeFpVWFJRVDJONWJDOHZiSE5oTVRGeGFsRlVRMXAwY21vMVlrdHlXRUZ6U0UxdFJIcHlaWFF6VFZNMFRVTnBZVEpaY2toT1lXWnVZbU4wV1VWVmFVZHNhMmh2WVZkWGMxVkZTMHhwUkRGMGRtTjBOMGR2YlVjdmVUTk1NbEJ2YmtGWFNrVk9VVXg0VUN0T1UwbHFORTlITTFoUU9FNUZZMEYwYzFwV1J6SlJRek5PUjFkUk1pc3ZWRTFCWTBKUE5EZFpLMVpRZERaVVVIcENkRVoxTHpJdk5HRmxURlJUVnpKU1IxZE9UWFpaVmtwR1ZIVmhOR1pOUWt0NmFFMXNkVkYzVG5ocGNERnVRMDFsV2xwU2IzUnNhRXBtTVdGaWJFZFBhVUowVlUxVWJqRlpUbWcwWjBGVmNFbFlhMkV5Wm1reGNWZFlPR3d3VG0weVYxRnZTekprZEVGVFdXMVNibVZUVTFvd1pGaEpTbXR2UkV0b1MxZHhTMU5KVHpCekx6bHZOMWwwZVZaVVpVWkNaREZ2VVhaR1ZFc3djVnAwYjJscFFucDRSRkE1UzA5NlRIUjBVbmhYWVZaSGFVTlBlamxZV2taa09UaFhPVEpVTjFSV2NpOXBVSE5UVDJSdFFUbEtTRTlvZDBKVFExRkhhM2xxUnpaNldtazJja2RRT0d4dmRVUlpSU3R5TTFkdE5tTm1jazVWUWxOU2ExZ3pMMnRMV2tSb05FVjJSSGcyUXpGNlZsaFNWbFpUV2pCTWFGaE1iMHRtV0ZScllYVmpkamRXUVd0NWRXVnZjVUU1VjBGVGVHWnhUbFpCUkVKaE9URlFjVk5CT0dkbWEyMUlTVWRrZEM5ME56VlFhVXB2VlZsWldsUnNLMngwZEhKRVJTdHpLMWM0VTFoemN6azNUSFpRYWpaa2VrWlpVVzFYYW5aRFVVVlJaMmMzZVdSd1NFOU5SbEZXTHpaWGREZHlabVZHWkZRMWNIWnVhVVZaUTFNeE9Xd3pkR3RuTDNOcE5EUm5hakIzU3pGNVpGcFZkWFV4UzNSdGFtdFJVMFUxWlVKVFdGWjFiSGhXV2l0TlIwcExla2c0YlM5NmNIQkpjRk5IWjNGRlFtaHFWMWxHV1hwbmFXWlZabEk1VlhwS2RVd3pSMjh4VkZOdVVtOWpRM2xOVVZaQk5sTlBWMUpoY1Zoa1NHNXNjM0ZTVDJOWlprSnpRMGxqU0V0NFlVWkxkbFpwZWs1VkswVnZNR1JXUm5oRGFFMU9WQzlpWVZSV1ZXbG1lR3BzZFhKNmR6SkJXSGRIV0U5SVZ5dGFRMVZPTTIxdlN6ZzNZbkJGV1Uxb00yazVaMVJRVTFGT05qbE5XR1V5WlVoRFlVUTNZMDVRWVZwelUyMTBNa1o1THpJMlFtNXlVa3RvVnpkQmMyMW9PRWc0VVc5dFRsWmFhMVExUlZwdlZqVTNWWEJ5V2xreVJITmliM0k0YmxFNFVEbHlZWEpDYlNzeWVEUTJla1J6Wlhod1pqSlFLM0pPTmtOcVlqSm5Mek0xTnpKMWJqRTVOV2xMYTFCTlYwUmhaV2xPTjFRMFl6RTFUSEoyTkZodE1tVmlaRk5wVGpkWFoyUkJlbWN6UW1sVE1XeFVSVVZwUTJ0YVZtZGpaVXRGY0VaRFlsSnFNbGxWTHk4NVJVNW1aWFJoZGpaamVESjNkbFl6WW1wSFZYZFhUVGxTYlcxalZqUTVVMHN2TTJkVVJWWXdlVnBWYlRsb1ZWZFlNMVpRYjBoSFFXTnBNQzl2YjJ4WlFXbzRZM1JoTVRWcWRqUkNPRTVDUTIwemRqSkRVRnBUUjBJeFF6WnFjbXBtZFdSS2FFSk1NM2xJYkhadFVHUmxkRmd3ZFVSRGNESnFaalkwVTFjd1N6bFhSbE5vVkhkRFVIWm5NMDVKTWxkUVpuQXlOMXBRVVhGS1NrMUNLMjV5U2t4VVVYaDRZVVprVVU5YWFUUkhibUZMUVhSTVRtUnVaM0Z4Y0hkTlQyVktWbXBOVUdaVmFITllkVnBrV0ZjclR5dHZPVmxtV0VjMVVYSnlLM28yYzBkSVNYWkZRV0l6YlVSVmRXYzJRVzFCWVZSclQwMVFVbVZoVldwWFNXcDNUR2g2T1VKS2FEUldUbFpsVnpaS2JFUjZOV012UjJGYWQxcHpObUUyVEZKUlYxQlBTR3MyY0c5MlFsbFJVbUkxUlRaS1JURXJVV05zZFZKSk1EWlllRzl3UTNGdE5tNXJSRFZ5V0dWalJYRk9TRzgyY0U5bmRrNHJjRlpSVTJKd09HSkxka0pGWkZFNFVIRkVibGRxUlV0emRTczFhbEZJVVdOYVdGSktaVmhwV1VWelZtZEdSV2R5VEcxbVZXcHlaazlwUlhoSE9WQlBZMk5ZTWxOTFZrdFhaaXRrWlZsdFJsTlBVRGhRZWpGNE1rUnVkVkptVFhCWFQwaG1jV055WTJsU2JXYzRjaTk0ZUVkVFRFczNRMHRhTW5CV01VcEJjalJxVVZnd1dtRm9kbGRxTjFKTmJIbGlWbFZOVG1JM05rMHZkamRvWjFkWk5IcDRURzVHU0dWWVQyVlVSalpJU0dSSWNqTlFOMUZKU0dveFdERndPRUZRU1VsNlVraG5PVXRJYVZNM1ZUSk5UMmtyZGtaMFpuZEpRU3RzZW1KNWFqSmFTa2xuZGtGaFp6TkpVMlF4YUVWYWIxTjZUbVJUVEVkRWVreDVTV1pJUlVvNE4zVkNOV3hPZDBSRU0xVjJWbmgwVVZkME5VbEdjMFo2ZDNkWlJFVm1lVUpEYkRReVdWWnZUVU5pYkRCVWJqRktibnBDVFRCS1lYQk1TWFpuY21kek9XZDVPVmg0U2tKRVJUWXdjRGR6Y1dsaVlXZDBTWFUwUlc1RGNpdEhZbHBaUjFjdlIzVXlhalF6TUVKR2QzRTFRVmhWVW1sbmVGRlJQVDAuNmQtV3BoTXZkY3JSRVd5Q3laVC1PN2ZabUozVEZ4R2l0QllEYS1RMFVpVXlwWUJzOFY3Tlk0MTFEMGs0Umc0RnlCS29Ebl91eV81NWFYWDkxWi1WeEE="/><input type="hidden" name="_eventId" value="submit"/></form>
            </div>
        </div>
    </section><section class="descriptionbox">
        <div class="description">
            <ul class="list-info">
                        <li>
                            <a href="https://stg.gmo-aozora.com/business/information/first-login.html" class="link-arrow" target="_blank">初期設定ガイド（はじめてログインするお客さま）</a>
                        </li>
                        <li>
                            <a href="https://d04.dev-bank.gmo-aozora.com/bank/corp/recovery" class="link-arrow" target="_blank">ログインID、ログインパスワードが分からない方</a>
                        </li>
                        <li>
                            <a href="https://stg.gmo-aozora.com/business/service/clientcert.html" class="link-arrow" target="_blank">電子証明書について</a>
                        </li>
                        <li>
                            <a href="https://faq.gmo-aozora.com/faq_detail.html?id=100008" class="link-arrow" target="_blank">電子証明書でログインできない方（有効期限切れ等）</a>
                        </li>
                        <li>
                            <a href="https://stg.gmo-aozora.com/policy/about-site.html#usage" class="link-arrow" target="_blank">ご利用環境について</a>
                        </li>
                        <li>
                            <a href="https://stg.gmo-aozora.com/news/maintenance.html" class="link-arrow" target="_blank">システムメンテナンス情報</a>
                        </li>
                        <li>
                            <a href="https://stg.gmo-aozora.com/security/" class="link-arrow" target="_blank">フィッシングサイトにご注意ください</a>
                        </li>
                    </ul>
        </div>
    </section><section class="banner-box">
        <div class="banner-wrapper-area">
  <h2>
    <img class="u-pc-only" src="https://gmo-aozora.com/service/business-ib/img/banner-title.png" alt=""><img class="u-blPC-only" src="https://gmo-aozora.com/service/business-ib/img/sp-banner-title.png" alt=""></h2>
  <ul class="banner-list">
    <li class="banner-list-item">
      <a href="https://gmo-aozora.com/service/business-ib/01login.html" target="_blank">
        <img class="u-pc-only" src="https://gmo-aozora.com/service/business-ib/img/in-banner-01.png" alt=""><img class="u-blPC-only" src="https://gmo-aozora.com/service/business-ib/img/in-sp-banner-01.png" alt=""></a>
    </li>
    <li class="banner-list-item">
      <a href="https://gmo-aozora.com/service/business-ib/02login.html" target="_blank">
        <img class="u-pc-only" src="https://gmo-aozora.com/service/business-ib/img/in-banner-02.png" alt=""><img class="u-blPC-only" src="https://gmo-aozora.com/service/business-ib/img/in-sp-banner-02.png" alt=""></a>
    </li>
    <li class="banner-list-item">
      <a href="https://gmo-aozora.com/service/business-ib/03login.html" target="_blank">
        <img class="u-pc-only" src="https://gmo-aozora.com/service/business-ib/img/in-banner-03.png" alt=""><img class="u-blPC-only" src="https://gmo-aozora.com/service/business-ib/img/in-sp-banner-03.png" alt=""></a>
    </li>
  </ul>
</div>
    </section>
            <footer>
        <div class="container">
            <div>
                <a href="https://stg.gmo-aozora.com/business/information/interest.html" target="_blank">金利</a>
                <a href="https://stg.gmo-aozora.com/business/information/fee.html" target="_blank">手数料</a>
                <a href="https://faq.gmo-aozora.com" target="_blank">よくあるご質問</a>
                <a href="https://stg.gmo-aozora.com/company/" target="_blank">会社情報</a>
                <a href="https://stg.gmo-aozora.com/policy/" target="_blank">各種方針</a>
                <a href="https://stg.gmo-aozora.com/policy/resolve-complaints.html" target="_blank">苦情・紛争解決機関</a>
                <a href="https://stg.gmo-aozora.com/provision/" target="_blank">規定・約款一覧</a>
                <a href="https://stg.gmo-aozora.com/information/attention.html" target="_blank">金融犯罪の注意喚起</a>
                <a href="https://stg.gmo-aozora.com/security/" target="_blank">セキュリティ対策</a>
            </div>
            <div class="copyright">Copyright © GMO Aozora Net Bank, Ltd. All Rights Reserved.</div>
        </div>
    </footer>
            </body>
</html>
