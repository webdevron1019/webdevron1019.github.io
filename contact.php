<!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <title>title</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="/assets/js/libs/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/common.js"></script>
    <script src="/assets/js/header.js"></script>
  </head>

<body class="common">

<header id="header" role="banner" class="site-header">
        <div class="site-header__wrapper">
        <h1 class="site-header__logo"><a href="index.html">EISHO</a><span>株式会社 栄商</span></h1>
        <nav class="site-header__nav">
            <h2 class="title--hidden">Navigation links</h2>
            <button class="site-header__nav-btn"></button>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                
                <div id="gloval-nav">
                    <nav class="site-header__sub-nav">
                        <ul class="site-header__nav-list">
                            <li class="site-header__nav-item"><a href="advantage.html">強み・こだわり</a></li>
                            <li class="site-header__nav-item"><a href="product.html">取扱い商品</a></li>
                            <li class="site-header__nav-item"><a href="factory.html">工場紹介</a></li>
                            <li class="site-header__nav-item"><a href="outline.html">会社概要</a></li>
                            <li class="site-header__nav-item"><a href="contact.php">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>   
        </nav> 
        
    </div>
    </header>

<main id="site-content" class="site-main">
<section class="site-contact">
        <header class="site-contact__header">
            <h2 class="site-contact__heading">取扱い商品</h2>
        </header>

        <section class="inquiry">
            <h3 class="title--hidden">Inquiry</h3>
            <p class="inquiry__intro">この度は、当WEBサイトをご覧いただきありがとうございます。
                弊社へのご意見・ご質問につきましては下記のフォームに必要事項にご記入の上、「確認画面へ進む」ボタンを押してください。
                お問い合わせいただいた内容によっては、ご返答までお時間がかかるものがございます。</p>
            <section class="inquiry__nav">
                <h4 class="inquiry__nav-title">お問い合わせの前に</h4>
                <p class="inquiry__nav-note">お問い合わせの前に、まずはこちらをご確認ください。
                    よくお問い合わせいただくご質問を、まとめて掲載しています。</p>
                <div class="inquiry__nav-btn"><a href="faq.html" >よくあるご質問</a></div>
            </section>
            <section class="inquiry__form">
                <h4>お問い合わせフォーム</h4>
                <p>※<span>必須</span>必須と書かれた項目は入力必須項目です。必ずご記入ください。</p>
                <form name="inquiryform" method="post" action="#" onsubmit="return formCheck()">
                    <ul class="inquiry__form-list">
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">お問い合わせ内容<span>（必須）</span></p>
                            <p class="inquiry__form-input text-area"><textarea name="" rows="5" cols="40"></textarea></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">貴社名</p>
                            <p class="inquiry__form-input"><input type="text"></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">部署名</p>
                            <p class="inquiry__form-input"><input type="text"></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">氏名<span>（必須）</span></p>
                            <p class="inquiry__form-input">
                             <label>姓</label>
                             <input type="text">
                             <label>名</label>
                             <input type="text">
                             <span>※全角でご記入ください。</span>
                            </p>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">フリガナ<span>（必須）</span></p>
                            <p>
                             <label>セイ</label>
                             <input type="text">
                             <label>メイ</label>
                             <input type="text">
                             <span>※全角カタカナでご記入ください。</span>
                            </p>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">メールアドレス<span>（必須）</span></p>
                            <p><input type="text"></p>
                            <span>※半角数字でご記入ください。</span>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">電話番号</p>
                            <p><input type="text"></p>
                            <span>※半角数字でご記入ください。</span>
                        </li>
                        <li class="inquiry__form-item">
                            <p class="inquiry__form-text">郵便番号</p>
                            <p><input type="text"></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p>都道府県</p>
                            <p><input type="text"></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p>市区郡</p>
                            <p><input type="text"></p>
                        </li>
                        <li class="inquiry__form-item">
                            <p>町名・番地</p>
                            <p><input type="text"></p>
                        </li>
                    </ul>
                </form>     
            </section>
        </section>






        <!-- <section>
            <form name="Form1" method="post" action="#" onsubmit="return formCheck()">
                <p>名前（必須）</p>
                <p id="notice-input-text-1" style="display: none; color: red;"> 【名前を入力して下さい】</p>
                <p><input type="text" name="InputText1"></p>
                <p>コメント（必須）</p>
                <p id="notice-textarea-1" style="display: none; color: red;"> 【コメントを入力して下さい】</p>
                <p><textarea name="Textarea1" rows="5" cols="40"></textarea></p>
                <p><input type="submit" value="送信"></p>
            </form>
        </section>
        <script type="text/javascript">
          
            function formCheck(){
                var flag = 0;

                // 入力必須項目が入力されているかチェック
                if( document . Form1 . InputText1 . value == "" ){ // 名前が未入力の場合
                    flag = 1;
                    document . getElementById( 'notice-input-text-1' ) . style . display = "block"; // 【名前を入力して下さい】を表示
                }else{ // 名前が入力済みの場合
                    document . getElementById( 'notice-input-text-1' ) . style . display = "none"; // 【名前を入力して下さい】を非表示
                }
                if( document . Form1 . Textarea1 . value == "" ){ // コメントが未入力の場合
                    flag = 1;
                    document . getElementById( 'notice-textarea-1' ) . style . display = "block"; // 【コメントを入力して下さい】を表示
                }else{ // コメントが入力済みの場合
                    document . getElementById( 'notice-textarea-1' ) . style . display = "none"; // 【コメントを入力して下さい】を非表示
                }

                if( flag ){ // 入力必須項目に未入力があった場合
                    window . alert( '必須項目は全て入力して下さい。' ); // アラートを表示
                    return false; // 送信中止
                }else{ // 入力必須項目が全て入力済みだった場合
                    return true; // 送信実行
                }

            }
            // 
            </script> -->
    </section>
</main>

<footer id="site-footer" role="contentinfo">
        <section class="contact">
            <h2 class="title--hidden">Footer</h2>
            <section class="contact-section1">
                <h3 class="title--hidden">Contact</h3>
                <p class="contact-section1__text1">まずはお気軽にご相談ください</p>
                <p class="contact-section1__text2">商品に関する質問やご相談など、まずはお気軽にご連絡ください。</p>
                <p class="contact-section1__phone">0866-67-9801</p>
                <span class="contact-section1__note">※受付 9:00～18:00 (土日祝は除く)</span>
            </section>
            <section class="contact-section2">
                <h3 class="contact-section2__heading">Contact us</h3>
                <a class="contact-section2__form-btn" href="contact.html">お問い合わせフォーム</a>
                
            </section> 
        </section>  
        <div class="site-footer__links"> 
            <a href="policy.html">プライバシーポリシー</a>
            <a href="outline.html">会社概要</a>
        </div>
        <p class="site-footer__copyright"> &copy; Eisho, Ltd. All rights reserved.</p>
        
        
    
</footer><!-- #footer -->

</body>

</html>