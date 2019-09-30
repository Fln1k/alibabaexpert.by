<?php function check_mobile_device() { 
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
    foreach ($mobile_agent_array as $value) {    
        if (strpos($agent, $value) !== false) return true;   
    };     
    return false; 
};?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>alibaba</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3e9a2870c1.js"></script>
    <script src='main.js'></script>
    <script language="javascript" type="text/javascript">
        function OnLoad() {
            var paramValue = window.location.href.split("?")[1].split("=")[1];
            document.getElementById("Type").value = paramValue;
        }
    </script>

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55354402, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55354402" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148072067-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148072067-1');
</script>
    <link rel="shortcut icon" href="img/image001.png" />
    <link rel="stylesheet" href="font/stylesheet.css" type="text/css" />
</head>

<body onload="OnLoad()">
    <style>
        body,
        html {
            font-family: 'Open Sans';
        }
        
        .uk-article-title {
            font-size: 2.625rem;
            line-height: 1.2;
            color: #111;
            font-family: 'Lato';
            font-weight: 300;
        }
        
        .uk-article-meta {
            font-size: .875rem;
            line-height: 1.4;
            color: #b6b6b6;
            text-transform: uppercase;
        }
        
        .uk-input,
        .uk-select:not([multiple]):not([size]),
        .uneditable-input:not([class*=uk-]),
        input[type=search]:not([class*=uk-]),
        input[type=text]:not([class*=uk-]),
        input[type=password]:not([class*=uk-]),
        input[type=datetime]:not([class*=uk-]),
        input[type=datetime-local]:not([class*=uk-]),
        input[type=date]:not([class*=uk-]),
        input[type=month]:not([class*=uk-]),
        input[type=time]:not([class*=uk-]),
        input[type=week]:not([class*=uk-]),
        input[type=number]:not([class*=uk-]),
        input[type=email]:not([class*=uk-]),
        input[type=url]:not([class*=uk-]),
        input[type=tel]:not([class*=uk-]),
        input[type=color]:not([class*=uk-]),
        select:not([class*=uk-]):not([multiple]):not([size]) {
            height: 45px;
            vertical-align: middle;
            display: inline-block;
            line-height: 43px;
            border-bottom: 1px solid #e7e7e7;
        }
        
        .uk-input,
        .uk-select,
        .uk-textarea,
        .uneditable-input:not([class*=uk-]),
        input[type=search]:not([class*=uk-]),
        input[type=text]:not([class*=uk-]),
        input[type=password]:not([class*=uk-]),
        input[type=datetime]:not([class*=uk-]),
        input[type=datetime-local]:not([class*=uk-]),
        input[type=date]:not([class*=uk-]),
        input[type=month]:not([class*=uk-]),
        input[type=time]:not([class*=uk-]),
        input[type=week]:not([class*=uk-]),
        input[type=number]:not([class*=uk-]),
        input[type=email]:not([class*=uk-]),
        input[type=url]:not([class*=uk-]),
        input[type=tel]:not([class*=uk-]),
        input[type=color]:not([class*=uk-]),
        select:not([class*=uk-]),
        textarea:not([class*=uk-]) {
            max-width: 100%;
            width: 100%;
            border: 0 none;
            padding: 0 6px;
            padding-bottom: 7px;
            background: #fff;
            color: #343434;
            -webkit-transition: .2s ease-in-out;
            transition: .2s ease-in-out;
            -webkit-transition-property: color, background-color, border-color, box-shadow;
            transition-property: color, background-color, border-color, box-shadow;
        }
        
        .uk-text-lead {
            font-size: 1.333rem;
            line-height: 1.5;
            color: #111;
            font-family: 'Open Sans';
            font-weight: 300;
            text-transform: none;
        }
        
        .form {
            display: block;
            margin-top: 0em;
            margin-block-end: 1em;
        }
        
        address,
        dl,
        fieldset,
        figure,
        ol,
        p,
        pre,
        ul {
            margin: 0 0 20px 0;
        }
        
        .btn-success,
        .uk-button-secondary {
            background-image: linear-gradient(100deg, #FE8155 0, #F95462 35%, #ED7AA3 100%);
            color: #fff;
            border: 1px solid transparent;
        }
        
        .btn,
        .uk-button {
            margin: 0;
            border: none;
            overflow: visible;
            font: inherit;
            color: inherit;
            text-transform: none;
            display: inline-block;
            box-sizing: border-box;
            padding: 0 20px;
            vertical-align: middle;
            font-size: 1.133rem;
            line-height: 42px;
            text-align: center;
            text-decoration: none;
            -webkit-transition: .1s ease-in-out;
            transition: .1s ease-in-out;
            -webkit-transition-property: color, background-color, border-color, box-shadow;
            transition-property: color, background-color, border-color, box-shadow;
            border-radius: 500px;
            background-origin: border-box;
        }
        
        .uk-text-lead {
            font-size: 1.333rem;
            line-height: 1.5;
            color: #111;
            font-family: 'Open Sans';
            font-weight: 300;
            text-transform: none;
        }
        
        .logo img {
            max-width: 130px;
        }
        
        .call_number {
            font-weight: 200;
            font-family: 'Circe'
        }
        
        .call_number i {
            padding-right: 7px;
        }
        
        .icons {
            padding-top: 10px;
            text-align: center;
        }
        
        .num {
            text-align: center;
            font-size: 17px;
            font-weight: 500;
            font-family: 'Circe';
        }
    </style>
<nav class="navbar navbar-expand-md" style="padding:0;">
        <div class="container">
            <div class="col-md-2">
                <center>
                    <a href="index.php" class="logo"><img src="img/image001.png"></a>

                    <p style="font-size: 20px; font-weight: 800;">ALEX WOLK</p>
                </center>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="col-md-8">
                <div class="brand">
                    <center>
                        <p style="font-size: 50px; font-weight: 800;margin: 0 auto;">ALIBABA EXPERT</p>
                    </center>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <div class="call_number">

                    <div class="icons" >
                        <? if(check_mobile_device()) :?>
                          <a style="color:#2f2f2f" href="viber://add?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns"></i></a>             
                        <? else : ?>
                          <a style="color:#2f2f2f" href="viber://chat?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns"></i></a>
                        <? endif; ?>
                        <a style="color:#2f2f2f" target="_blank" href="https://t.me/ALEXANDRW"><i class="fab fa-telegram fa-2x" id="icns"></i></a>
                        <a style="color:#2f2f2f" target="_blank" href="https://wa.me/375297290243"><i class="fab fa-whatsapp fa-2x" id="icns"></i></a>
                        <a style="color:#2f2f2f" target="_blank" href="https://www.instagram.com/alibaba.expert/"><i class="fab fa-instagram fa-2x" id="icns"></i></a>
                    </div>
                    <div class="num" style="font-weight: bold;">
                        +375 29 7290243<br> <a href="https://mail.google.com/mail/u/0/#search/alex.bizby%40gmail.com" style="color: #222; font-weight: bold;">alex.bizby@gmail.com</a></a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container text-center" style="padding-top: 5px">
        <div class="uk-width-expand@m uk-first-column">




            <article id="article-11" class="uk-article" data-permalink="" typeof="Article">

                <div class="uk-margin-medium-bottom uk-container uk-container-small uk-text-center">
                    <h1 class="uk-article-title uk-margin-remove-top text-uppercase">Регистрация для подключения<br> продавцов на alibaba.com
                    </h1>
                </div>
                <div class="uk-container uk-container-small">
                    <div property="text">
                        <p class="uk-text-lead" style="text-align: left; font-weight: 100; ">Мы помогаем поставщикам выйти на новый уровень коммерческой деятельности, используя мощный инструмент - глобальную B2B площадку alibaba.com. Мы делаем экспорт более комфортным и перспективным для Вас, служим проводником
                            в непростых реалиях мира электронной коммерции.</p>
                        <form method="POST" action="mailer_order.php" target="reg.php" name="login">

                            <p><input type="hidden" id="Type" class="form-control" style="text-align: center; font-size: 300%;" name="m_user_type" type="text"></p>
                            <p><input placeholder="Название компании " class="form-control" value="" name="m_partner_name" type="text"></p>
                            <p><input placeholder="Фамилия " class="form-control" value="" name="m_user_surname" type="text"></p>
                            <p><input placeholder="Имя " class="form-control" value="" name="m_user_name" type="text"></p>
                            <p><input placeholder="Телефон " class="form-control" value="" name="m_user_telefon" type="text"></p>
                            <p><input placeholder="E-mail" class="form-control" value="" name="m_user_email" type="text"></p>
                            <p align="center">
                                <button name="reg_alibaba" value="1" type="submit" class="btn btn-success">Отправить</button>
                            </p>
                        </form>

                    </div>

                </div>
            </article>

        </div>
    </div>
</body>

</html>