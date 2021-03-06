


<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="description" content="sample text,sample tex">
    <meta name="keywords" content="word1,word2,word3">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="assets/images/common/ogp.png">

    <meta name="apple-mobile-web-app-title" content="">

    <link rel="shortcut icon" href="assets/images/common/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="images/common/apple-touch-icon-precomposed.png">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/lib/modernizr.js"></script>

</head>
<body id="js-body">
<div id="fb-root"></div>

<noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

<input type="hidden" value="./" id="js-base-url">

<div class="l-wrap js-wrap">
    <!--start header-->
<header class="l-header l-header-admin js-header">
    <div class="l-header-top u-clear">
        
            <div class="l-header-logo">
            
<a class="logo " href="./">
    <img src="assets/images/logo-admin.png" width="138" height="28" alt="BLOG"/>
</a>

            </div>
            <div class="l-header-text">
                <p>ADMIN PAGE</p>
            </div>
        
    </div>
</header>
<!--end header-->


    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            {!! Form::open(['action'=>'HomeController@savepost', 'files'=>true]) !!}
                <label for="image" class="form-title">EYE CATCH IMAGE
                    <div class="form-file u-clear">
                        <span class="form-file-button">UPLOAD</span>
                    </div>
                </label>
                <input type="file" id="image" class="input input-image">
                <label for="title" class="form-title">TITLE</label>
                <div class="form-body">
                    <input type="text" id="title" class="input input-text">
                </div>
                <label for="contents" class="form-title">CONTENTS</label>
                <div class="form-textarea">
                    <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="input input-contents"></textarea>
                </div>
                <label for="submit" class="form-button">
                    <div class="button">
                    <p class="button-text">Submit</p>
                </div>
                                </label>
                                <input type="submit" id="submit" class="input input-submit">
                                <a href="#" class="form-button">
                                    <div class="button">
                    <p class="button-text">Back</p>
                </div>
                </a>
            {!! Form::close() !!}
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->

        <!--footer ここから-->
    <footer class="l-footer l-footer-admin">
        
            <div class="l-footer-copyright">
             <small class="copyright">&copy;copyright</small>
            </div>
        
    </footer>
    <!--footer ここまで-->
</div>

        <!--javascript ここから-->
        <script src="./assets/lib/jquery-3.1.1.min.js"></script>
        <script src="./assets/js/vendor.js"></script>
        <script src="./assets/js/app.js"></script>
        <!--javascript ここまで-->
    </body>
</html>
