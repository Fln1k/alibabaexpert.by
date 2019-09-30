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
    <title>Alex Wolk</title>


    <meta name="viewport" content="width=720">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3e9a2870c1.js"></script>
    <link rel="shortcut icon" href="img/image001.png" />
    <script src='main.js'></script>
    <link rel="stylesheet" href="main_css.css" type="text/css" />
    <link rel="stylesheet" href="font/stylesheet.css" type="text/css" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55354402, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            ecommerce: "dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55354402" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148072067-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-148072067-1');
    </script>

    <style>
        .contact {
            background: #e2670c;
            /* Цвет фона */
            color: #fff;
            /* Цвет текста */
            padding: 5px;
            /* Поля вокруг текста */
            border-radius: 5px;
            /* Уголки */
        }
    </style>
    <script language="javascript" type="text/javascript">
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-md" style="padding:0;">
        <div class="container">
            <div class="col-md-2">
                <center>
                    <a href="#" class="logo"><img src="img/image001.png"></a>

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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="call_number">

                    <div class="icons">
                        <? if(check_mobile_device()) :?>
                          <a href="viber://add?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns"></i></a>             
                        <? else : ?>
                          <a href="viber://chat?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns"></i></a>
                        <? endif; ?>
                        <a target="_blank" href="https://t.me/ALEXANDRW"><i class="fab fa-telegram fa-2x" id="icns"></i></a>
                        <a target="_blank" href="https://wa.me/375297290243"><i class="fab fa-whatsapp fa-2x" id="icns"></i></a>
                        <a target="_blank" href="https://www.instagram.com/alibaba.expert/"><i class="fab fa-instagram fa-2x" id="icns"></i></a>
                    </div>
                    <div class="num" style="font-weight: bold;">
                        +375 29 7290243<br> <a href="https://mail.google.com/mail/u/0/#search/alex.bizby%40gmail.com" style="color: #222; font-weight: bold;">alex.bizby@gmail.com</a></a>

                    </div>
                    <center><a href="#test1"><button class="btn" id="svyaz">СВЯЗАТЬСЯ</button></a>
                    </center>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid" id="fixed1">
        <div class="row">
            <div class="col-lg-22">
                <div class="banner text-center">
                    <h1 style="font-size: 50px;padding-top: 110px;">МЫ ЗАПУСКАЕМ МЕЖДУНАРОДНЫЕ ПРОДАЖИ</h1>
                    <p style="font-size: 30px;padding-bottom: 100px;">открываем доступ к <span style="color: #ff6a24;font-size: 37px; font-weight: 800;">160 миллионам</span> онлайн-покупателей со всего мира</p>
                </div>
            </div>

        </div>

    </div>
    <h1 class="i1">ПРИВЛЕКАЙТЕ ПОКУПАТЕЛЕЙ СО ВСЕГО МИРА УЖЕ СЕГОДНЯ!<br>СОЗДАНИЕ АККАУНТА ВСЕГО ЗА 1 МЕСЯЦ "ПОД КЛЮЧ"</h1>

    <div class="container-fluid" id="fixed2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>ALIBABA.COM В ЦИФРАХ</h1>
                    <p>Alibaba.com – самая крупная торговая онлайн платформа для B2B продаж, непрерывно развивающаяся с 1999 года.</p>
                    <p>Alibaba.com доступна во многих странах планеты и уже обслуживает не менее 160 миллионов покупателей. Ее суммарный оборот и динамика развития являются рекордными для глобального маркетплейса.</p>
                </div>
                <div class="col-lg-6">
                    <div class="section_content">
                        <div class="experience_box">
                            <span>160</span>
                            <p><b>миллионов</b><br>Посетителей в месяц <br>со всего мира</p>
                        </div>
                        <div class="experience_box">
                            <span>278</span>
                            <p><b>миллионов</b><br>Заказов в день</p>
                        </div>
                        <div class="experience_box">
                            <span>2,1$</span>
                            <p><b>миллиарда</b><br>Сумма ежедневных заказов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="fixed3">

        <div class="section_head">
            <h3 style="text-transform: uppercase;word-wrap: break-word;">Возможности и преимущества alibaba.com</h3>
            <br>
            <br>
        </div>
        <div class="section_content">

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-balance-scale fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px" id="WOZ">
                            <h5 class="font-weight-bold">Международная торговля</h5>
                            <p class="grey-text">свободный доступ к покупателям<br> из 190 стран</p>

                        </div>
                        <div class="col-1">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="fas fa-piggy-bank fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px">
                            <h5 class="font-weight-bold">Маркетинг на основе аналитики</h5>

                            <p class="grey-text">встроенные инструменты быстрого анализа поведения клиентов и рынка сбыта</p>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="fas fa-search fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px">
                            <h5 class="font-weight-bold">Низкая стоимость получения клиента</h5>
                            <p class="grey-text">развитие аккаунта и продвижение товаров стоит дешевле, чем продвижение оффлайн или за счет сайта</p>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-square fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px" id="WOZ">
                            <h5 class="font-weight-bold">Отсутствие дополнительных расходов </h5>
                            <p class="grey-text">экономите на содержании физического<br> магазина и отдельного сайта</p>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="fas fa-coins fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px">
                            <h5 class="font-weight-bold">Ранжирование в Google</h5>
                            <p class="grey-text">Alibaba.com находится в топе поисковых систем и имеет высокий рейтинг
                            </p>
                        </div>
                        <div class="col-2">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="fas fa-clock fa-3x"></i>
                        </div>
                        <div class="col-8 text-left" style="margin-left: 30px;">
                            <h5 class="font-weight-bold">Экономия времени</h5>
                            <p class="grey-text">клиенты сразу получают ответ на свои заявки необходимую информацию по товару</p>
                        </div>
                        <div class="col-1">
                            <i class="fas fa-check fa-2x" style="color: green;"></i>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <br>
    </div>

    <div class="container-fluid" id="fixed4">
        <div class="container">
            <center>
                <h1>КАКИЕ УСЛУГИ МЫ ПРЕДОСТАВЛЯЕМ?</h1>
            </center>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Помогаем организовать быстрый старт оптовых продаж
                            </p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Создаём продающий профиль компании на платформе на английском языке</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Создаём карточки товаров с высоким рейтингом по всем требованиям alibaba.com, которые попадают на первые страницы при поиске</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Разрабатываем дизайн и архитектуру полноценного внутреннего сайта, адаптированного под мобильную версию</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Оказываем помощь по получению статуса Gold Supplier для полноценной работы на платформе и привязываем его к русскоязычному пулу</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Предоставляем закрепленного за Вашей компанией личного менеджера</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text"> Ведем переговоры с клиентами на английском языке от имени производителя
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Обеспечиваем информационную поддержку для клиентов 24/7</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text"> Участвуем в тендерах RFQ для активного поиска уже заинтересованных клиентов</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Производим анализ рынка по товару на основе предложений конкурентов и запросов в тендере RFQ</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Настраиваем контекстную рекламу для получения максимального возможного количества заявок на alibaba.com</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Оказываем техническую и информационную поддержку по всем вопросам работы платформы alibaba.com</p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Помогаем в подборе логистической компании для просчёта стоимости и доставки товара
                            </p>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-1">
                            <i class="far fa-check-circle fa-3x amber-text pr-3" aria-hidden="true"></i>
                        </div>
                        <div class="col-10 text-left" style="margin-left: 20px">

                            <p class="grey-text">Ведём совместную работу с отделом продаж производителя
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="container-fluid" id="fixed5">
        <center>
            <h1>ПОЧЕМУ С НАМИ УДОБНО РАБОТАТЬ?</h1>
        </center>
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <br>
                    <br>
                    <center><img src="img/case.png" alt=""></center>
                    <p>Не нужно проходить обучение по работе с платформой и содержать в штате высокооплачиваемых специалистов</p>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    <center><img src="img/lamp.png" alt=""></center>
                    <p>Самостоятельно решаем проблемы и технические вопросы возникающие в процессе работы с платформой</p>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    <center><img src="img/rating.png" alt=""></center>
                    <p>Ежедневно, 24/7 поддерживаем рейтинг аккаунта. Быстро и своевременно отвечаем на запросы</p>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    <center><img src="img/people.png" alt=""></center>
                    <p>Участвуем в тендерах RFQ и помогаем быстро делать логистические просчёты</p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="container-fluid" id="fixed6">
        <h1>БЕРЁМ НА СЕБЯ ФУНКЦИИ ФИЛЬТРА И ПРИВОДИМ <br> ВАМ КЛИЕНТА ГОТОВОГО К СОТРУДНИЧЕСТВУ!</h1>
    </div>

    <div class="container-fluid" id="fixed7">
        <br>
        <center>
            <h1 class="i2">ВАШИ ВОЗМОЖНОСТИ С ALIBABA.COM</h1>
        </center>
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2">
                <center><i class="fas fa-search fa-4x"></i></center>
                <h3>ПОИСК КОНТРАГЕНТОВ<br>ПО ВСЕМУ<br>МИРУ</h3>
                <h4>Alibaba.com дает реальный шанс быстро и легко найти потенциальных клиентов, партнеров или поставщиков по всему миру
                </h4>
            </div>
            <div class="col-md-2">
                <center><i class="fas fa-business-time fa-4x"></i></center>
                <h3>ПРОДВИЖЕНИЕ БИЗНЕСА НА МИРОВОЙ <br>АРЕНЕ</h3>
                <h4>Воспользуйтесь преимуществами, которые может предоставить alibaba.com и успешно продавайте свои товары и услуги по всему миру </h4>
            </div>
            <div class="col-md-2">
                <center><i class="fas fa-hand-holding-usd fa-4x"></i></i>
                </center>
                <h3>ОПТИМИЗАЦИЯ ЗАТРАТ НА СОДЕРЖАНИЕ БИЗНЕСА</h3>
                <h4>Вам не стоит тратить лишние деньги на продвижение Вашего товара в других сервисах. С alibaba.com Вы платите меньше, но получаете все необходимые решения</h4>
            </div>
            <div class="col-md-2">
                <center><i class="fas fa-globe-americas fa-4x"></i></center>
                <h3>ПРОДВИЖЕНИЯ ВАШЕГО БРЕНДА НА МИРОВОЙ <br>АРЕНЕ</h3>
                <h4>Ваш бренд и товар выгодно представлен для клиентов со всего мира и вы экономите на инвестициях в маркетинг и пиар</h4>
            </div>
            <div class="col-md-2">
                <center><i class="fas fa-shield-alt fa-4x"></i></center>
                <h3>БЕЗОПАСНОСТЬ ЗАКЛЮЧЕНИЯ ВЫГОДНЫХ<br> СДЕЛОК</h3>
                <h4>Alibaba.com всяческими способами предотвращает любые возможные мошеннические действия, делая продажи максимально безопасными</h4>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <center>
            <p style=" font-weight: 800;
        font-size: 37px;
        color:#ff6a24;;">ЦЕНЫ И ТИПЫ АККАУНТОВ ALIBABA.COM</p>
        </center>
        <div id="content">
            <div class="table-responsive" style="max-width: 100%; overflow: auto;">
                <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                    <tbody>
                        <tr>
                            <td style="background:none;" rowspan="2" class="td1 td3 height color1" width="276"></td>
                            <td colspan="3" class="td1 height bold color3">Gold Supplier Membership</td>

                            <td class="td1 td4 height bold" width="230">FREE Member</td>
                        </tr>
                        <tr>
                            <td class="height2 font16 color3">
                                <div class="unhovered">Premium</div>
                            </td>
                            <td class="font16 color3">
                                <div class="hovered">Standard </div>
                            </td>
                            <td class="font16 color3">
                                <div class="unhovered">Basic</div>
                            </td>
                            <td class="td4  font12">Для покупателей или продавцов<br>(без возможности ведения торговой деятельности)
                            </td>
                        </tr>
                        <tr class="price">
                            <td class="td3 color1"></td>
                            <td class="color3"><span class="mony">$ 5,999</span></td>
                            <td class="color3"><span class="mony">$ 2,999</span></td>
                            <td class="color3"><span class="mony">$ 1,399</span></td>
                            <td class="td4 "><span class="free">FREE</span></td>
                        </tr>
                        <tr>
                            <td class="td3 font18 bold color1">Основные функции</td>
                            <td class="color3">
                                <a href="reg.php?type=Premium" class="lite-btn apply">Подать заявку</a>
                            </td>
                            <td class="color3">
                                <a href="reg.php?type=Standard" class="lite-btn white-btn apply">Подать заявку</a>
                            </td>
                            <td class="color3">
                                <a href="reg.php?type=Basic" class="lite-btn white-btn apply">Подать заявку</a>
                            </td>
                            <td class="td4 ">
                                <a href="reg.php?type=Free" class="lite-btn white-btn">Подать заявку</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 color1 markets priority" data-placement="right" data-toggle="tooltip" title="Продукты от поставщиков Gold Suppiler будут иметь больше шансов появиться в верхней части результатов поиска покупателя.
                            90% покупателей будут просматривать только первые 3 страницы результатов поиска">Приоритет ранжирования<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Первые</td>
                            <td class="color3">Вторые</td>
                            <td class="color3">Третьи</td>
                            <td class="td4 ">Последнии</td>
                        </tr>


                        <tr>
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="1. Как качество, так и количество влияют на намерение покупателя приобрести товар
                            2. Gold Suppliers могут размещать неограниченное количество продуктов с 6 фотографиями и 3 ключевых слова для каждого товара

                               ">Кол-во товаров<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Неограничено</td>
                            <td class="color3">Неограничено</td>
                            <td class="color3">Неограничено</td>
                            <td class="td4 ">--</td>
                        </tr>
                        <tr>
                            <td class="td3 color1 bold markets" data-placement="right" data-toggle="tooltip" title="Витрина продукта-это функция ранжирования, которая выделяет ваши продукты как на вашем настроенном веб-сайте, так и в результатах поиска покупателя. 
                            Витрина продукта-это хорошо для бизнеса, чтобы получить более чем в 100 раз больше кликов покупателя">Витринных товаров<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="bold color3">28</td>
                            <td class="bold color3">12</td>
                            <td class="bold color3">5</td>
                            <td class="td4 bold">нет</td>
                        </tr>
                        <tr>
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Gold Suppilers могут связаться с покупателями сразу же после размещения нового запроса на покупку. Gold Suppilers также имеют эксклюзивный доступ к контактной информации покупателей.

                            Более 20 000 новых запросов на покупку размещены на alibaba.com каждый день">Доступ к контактам клиентов<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="td4 ">--</td>
                        </tr>
                        <tr>
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Все Gold Supplier  должны пройти процесс аутентификации и верификации, проводимый сторонним поставщиком. Это поможет вам сразу же завоевать доверие и признание в качестве законного и серьезного торгового партнера.

                            Более 85% покупателей предпочитают вести бизнес только с поставщиками золота">Верификация<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="td4 ">--</td>
                        </tr>
                        <tr>
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Веб-сайт содержит в себе:

                            * Фотографии компаннии
                            * Видео компании
                            * Сертификаты компании">Индивидуальный сайт<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="td4 ">--</td>
                        </tr>

                        <tr>
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="- Приоритетное прохождение верификации

                            - Выделенный менеджер-ассистент (на площадке alibaba.com)
                            
                            - Доступ к проведению промо-акций на площадке">Персональное обслуживание<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">--</td>
                            <td class="color3">--</td>
                            <td class="td4 ">--</td>
                        </tr>

                        <tr>
                            <td class="td3 color1"></td>
                            <td class="color3"></td>
                            <td class="color3"></td>
                            <td class="color3"></td>
                            <td class="td4"></td>
                        </tr>
                        <tr>
                            <td class="td3 font18 bold color1">
                                <div class="other"><i class=""></i></div>
                            </td>
                            <td class="color3"></td>
                            <td class="color3"></td>
                            <td class="color3"></td>
                            <td class="td4 "></td>
                        </tr>



                        <tr class="other-tr" style="display: table-row;">
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Размер ёмкости для фотографий 5ГБ = 1,500 + фото продукта (3МБ / фото)

                            Размер ёмкости для фотографий 3ГБ = 1,000 + фото продукта (3МБ / фото)
                            
                            Размер ёмкости для фотографий 1ГБ = 300 + фото продукта (3МБ / фото)
                            
                            Размер ёмкости для фотографий 150мб = 50 фото продукта (3МБ / фото)">Размер фотобанка<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">5GB</td>
                            <td class="color3">3GB</td>
                            <td class="color3">1GB</td>
                            <td class="td4 ">10 MB</td>
                        </tr>
                        <tr class="other-tr" style="display: table-row;">
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="5 дополнительных учётных записей поставляются с каждым членством Gold Supplier, и они могут быть распределены между различными сотрудниками. Это позволяет назначать разные запросы клиентов разным людям, а также контролировать работу каждой дополнительной учётной записи">Кол-во сотрудников<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">5</td>
                            <td class="color3">5</td>
                            <td class="color3">5</td>
                            <td class="td4 ">--</td>
                        </tr>

                        <tr class="other-tr" style="display: table-row;">
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Biz Trends - Моя Эффективность, поможет вам получить советы о том, как повысить производительность и эффективность на alibaba.com.">Biz Trends - Моя Эффективность<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="td4 ">--</td>
                        </tr>
                        <tr class="other-tr" style="display: table-row;">
                            <td class="td3 color1 markets" data-placement="right" data-toggle="tooltip" title="Biz Trends - отраслевой анализ, предоставляет обзоры поведения ваших покупателей и конкурентов.">Biz Trends - Отраслевой анализ<i class="fas fa-angle-right" style="padding-left: 7px;"></i></td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="color3">Есть</td>
                            <td class="td4 ">--</td>
                        </tr>



                        <tr class="price">
                            <td class="td3 color1"></td>
                            <td class="color3"><span class="mony">$ 5,999</span></td>
                            <td class="color3"><span class="mony">$ 2,999</span></td>
                            <td class="color3"><span class="mony">$ 1,399</span></td>
                            <td class="td4 "><span class="free">FREE</span></td>
                        </tr>
                        <tr>
                            <td style="background:none;" class="td3 td5 color1"></td>
                            <td class="td5 color3"><a href="reg.php?type=Premium" class="lite-btn apply">Подать заявку</a></td>
                            <td class="td5 color3 td6"><a href="reg.php?type=Standard" class="lite-btn white-btn apply">Подать заявку</a>
                            </td>
                            <td class="td5 color3"><a href="reg.php?type=Basic" class="lite-btn white-btn apply">Подать заявку</a>
                            </td>
                            <td class="td4 td5"><a href="reg.php?type=Free" class="lite-btn white-btn">Подать заявку</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container" id="fixed8">

        <h1 style="padding-top: 90px">НАШИ ПРОЕКТЫ</h1>
        <div class="our_projects">
            <!-- СТРОКА 1  -->
            <div class="row">

                <!-- ПРОЕКТ 1  -->
                <div class="col-lg-3">
                    <div class="card">

                        <img class="card-img-top" src="img/Материалы.PNG" alt="Card image cap">


                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 25px;">Artifical stone</h4>
                            <center><a href="https://by1074145041.trustpass.alibaba.com/productgrouplist-233028239/ARTIFICIAL_STONE.html?spm=a2700.icbuShop.88.23.2b1c5456pp6msh" target="_blank" class="btn btn-primary">Перейти на
                                    сайт</a></center>
                        </div>
                    </div>
                </div>
                <!-- КОНЕЦ БЛОКА ПРОЕКТ 1 -->
                <!-- ПРОЕКТ 2  -->
                <div class="col-lg-3">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="img/мото.PNG" alt="Card image cap">
                            <center><a href="https://by1074145041.trustpass.alibaba.com/productgrouplist-810418808/MOTORCYCLES_SCOOTERS.html?spm=a2700.icbuShop.88.22.44381b5dsIkXuz" target="_blank" class="btn btn-primary">Перейти
                                на
                                сайт</a></center>

                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 25px;">Motorcycles</h4>

                        </div>

                    </div>

                </div>
                <!-- КОНЕЦ БЛОКА ПРОЕКТ 2 -->
                 <!-- ПРОЕКТ 3  -->
                <div class="col-lg-3">

                    <div class="card">
                        <div class="view overlay">

                            <img class="card-img-top" src="img/Вело.PNG" alt="Card image cap" class="img-fluid ">
                            <center>
                                <a href="https://by1074145041.trustpass.alibaba.com/productgrouplist-810135582/BICYCLE.html?spm=a2700.icbuShop.98.6.5d905079HoJYys" target="_blank" class="btn btn-primary ">Перейти
                                на
                                сайт</a></center>
                            <div class="card-body ">
                                <h4 class="card-title" style="font-size: 25px;">Bicycles</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- КОНЕЦ БЛОКА ПРОЕКТ 3 -->
                
                <div class="col-lg-3">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="img/мото.PNG" alt="Card image cap">
                            <center><a href="https://by1074145041.trustpass.alibaba.com/productgrouplist-810418808/MOTORCYCLES_SCOOTERS.html?spm=a2700.icbuShop.88.22.44381b5dsIkXuz" target="_blank" class="btn btn-primary">Перейти
                                на
                                сайт</a></center>

                        </div>
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 25px;">Motorcycles</h4>

                        </div>

                    </div>

                </div>
            </div>
             <!-- КОНЕЦ БЛОКА СТРОКА 1  -->
        </div>
    </div>

    <br>
    <br>

    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>


    <div id="test1">
        <div class="container" style="color:#2f2f2f;" id="contact_us">
            <p style="font-size: 37px;
        font-weight: 800;
        color:#2f2f2f;;
        padding-top: 35px;
        padding-bottom: 15px;">Напишите нам</p>
            <h3 style="color: #222;">Наши специалисты ответят на все ваши вопросы</h3>
            <form method="POST" action="mailer_question.php" target="reg.php" name="login">
                <div class="form_factor">
                    <div class="col-md-5">
                        <input type="text" id="name" class="form-control mb-4" name="name" placeholder="*Имя и Фамилия">
                        <input type="text" id="tel" class="form-control mb-4" name="phone" placeholder="*Телефон">
                        <input type="text" id="e-mail" class="form-control mb-4" name="email" placeholder="*E-mail">
                        <input type="text" id="comp" class="form-control mb-4" name="company_name" placeholder="Компания">
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5" style="height: 150px;" name="text" placeholder="Сообщение"></textarea>
                        <button type="submit" value="1" class="btn  btn-primary mt-4 mb-5">Отправить сообщение</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </div>


    <footer id="foo">


        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p>Контакты:</p>

                    <div class="icons_foo">
                        <? if(check_mobile_device()) :?>
                          <a href="viber://add?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns1"></i></a>             
                        <? else : ?>
                          <a href="viber://chat?number=%2B375297290243"><i class="fab fa-viber fa-2x" id="icns1"></i></a>
                        <? endif; ?>
                        <a target="_blank" href="https://t.me/ALEXANDRW"><i class="fab fa-telegram fa-2x" id="icns1"></i></a>
                        <a target="_blank" href="https://wa.me/375297290243"><i class="fab fa-whatsapp fa-2x" id="icns1"></i></a>
                        <a target="_blank" href="https://www.instagram.com/alibaba.expert/"><i class="fab fa-instagram fa-2x" id="icns1"></i></a>
                    </div>
                    <div class="num_foo" style="font-size: 18px;font-weight: bold;">

                        +37529 7290243<br><a href="https://mail.google.com/mail/u/0/#search/alex.bizby%40gmail.com" style="color: #fff; font-weight: bold;">alex.bizby@gmail.com</a></a>

                    </div>
                </div>

                <div class="col-lg-4"> </div>

                <div class="col-lg-4" style="text-align: right">

                    <h2 style="font-size: 18px;padding-top: 140px;">
                        ИП Волк Александр</h2>
                    <h2 style="font-size: 18px"> Burdeynogo, 45, Minsk, Belarus</h2>

                </div>
            </div>
        </div>


        <br>

    </footer>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })



        var hoverList = function() {
            var hoverItem = $('#overshow-target');
            hoverItem.on('mouseover', function() {
                hoverItem.find('#overshow-content').removeClass('chidden');
                hoverItem.addClass('lc-over');
                hoverItem.prev().addClass('navlast');
                hoverItem.find('#lc').css('color', '#f90');
            });
            hoverItem.on('mouseout', function() {
                hoverItem.find('#overshow-content').addClass('chidden');
                hoverItem.removeClass('lc-over');
                hoverItem.prev().removeClass('navlast');
                hoverItem.find('#lc').css('color', '#333');
            });
        };
        hoverList();


        var tdsHover = function() {
            var tds1 = $(".lite-table  tr:gt(1)").find('td:eq(1)').add('.lite-table  tr:eq(1) td:eq(0)');
            var tds2 = $(".lite-table  tr:gt(1)").find('td:eq(2)').add('.lite-table  tr:eq(1) td:eq(1)');
            var tds3 = $(".lite-table  tr:gt(1)").find('td:eq(3)').add('.lite-table  tr:eq(1) td:eq(2)');
            var tdsArr = [tds1, tds2, tds3];
            $.each(tdsArr, function(idx, val) {
                val.on('mouseover', function() {
                    val.removeClass('color3').addClass('color2');
                    val.first().find('div').removeClass('unhovered').addClass('hovered');
                    val.last().addClass('td6');
                });
                val.on('mouseout', function() {
                    val.removeClass('color2').addClass('color3');
                    val.first().find('div').addClass('unhovered').removeClass('hovered');
                    val.last().removeClass('td6');
                });
            });
        };
        tdsHover();
    </script>

</body>

</html>