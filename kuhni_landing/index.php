<?php
	session_start();

	if (isset($_GET['utm_source'])) $_SESSION['utm']['utm_source'] = $_GET['utm_source'];
	if (isset($_GET['utm_term'])) $_SESSION['utm']['utm_term'] = $_GET['utm_term'];
	if (isset($_GET['utm_medium'])) $_SESSION['utm']['utm_medium'] = $_GET['utm_medium'];
	if (isset($_GET['utm_content'])) $_SESSION['utm']['utm_content'] = $_GET['utm_content'];
	if (isset($_GET['utm_campaign'])) $_SESSION['utm']['utm_campaign'] = $_GET['utm_campaign'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ALBA - ателье авторской мебели</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69201651-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-69201651-6');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter47657035 = new Ya.Metrika({
                        id:47657035,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/47657035" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="css/animate.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/wow.min.js" charset="utf-8"></script>
	<script>
		wow = new WOW({
			mobile: false,
		})
		new WOW().init();
	</script>

    <!-- fontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<body>
<div class="nav-wrapper container">
    <nav class="navbar justify-content-between">
        <div class="navbar-brand">
            <img src="img/logo.png" class=" fadeInLeft wow" data-wow-delay=".2s">
        </div>
        <div class="navbar-text fadeInRight wow" data-wow-delay=".2s">
            <ul>
                <li class="alba-phone f24 robsl bold">+38(096) 717-73-73</li>
                <li>
                    <a href="https://kitchen.alba.com.ua//#callbackhunter" class="btn btn-sec f19 robsl bold">Заказать звонок</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="block-big wow fadeInDown wow" style="background: url('img/20160608_021_Alba.jpg') center/cover no-repeat; position: relative;">
    <div class="overlay" style="background-color: rgba(0,0,0,0.4);"></div>
    <div class="container height">
        <div class="row align-items-center justify-content-center height">
            <div class="col max450" style="margin: 50px 0;">
                <div class="" style="color: #fff;">
                    <div class="f34 robsl bold main">
                        Эксклюзивные<br><span class="text-bg-yellow">кухни</span> любой<br>сложности под ключ<br>от производителя<br>
                    </div>
                    <span class="text-bg-yellow f24" style="margin: 25px 0; display: inline-block; padding: 5px 20px;">за <span style="font-weight: 600;">35 дней</span> от 50 000 гривен</span>
                    <div class="f24">
                        Разрабатываем проект,<br>изготавливаем, доставляем<br>и собираем
                    </div>
                </div>
            </div>
            <div class="col max450">
                <div class="booking text-center" style="background-color: #fff; padding: 50px 0;border: 10px solid #ffc000;">
                    <div class="text-bg-yellow f30 robsl reg">Получить консультацию</div>
                    <div class="booking-form">
                        <form action="/send.php" method="post">
                            <div class="styled-input">
                                <input type="text" id="inname" name="name" required />
                                <label class="hel">Имя</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="tel" id="phone" name="phone" required />
                                <label class="hel">Номер телефона</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" id="email" name="email" required/>
                                <label class="hel">Email</label>
                                <span></span>
                            </div>
                            <button class="btn-prim robsl bold f19" type="submit">Оставить заявку</button>
                        </form>
                        <div class="booking-bottom-text">+Вы получите электронный каталог идей для вдохновения</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 100px 0;">
    <div class="f34 bold robsl">
        <div class="row uppercase justify-content-center">
            <span class="text-bg-yellow" style="padding-top: 0; padding-bottom: 0; margin-bottom: 50px;">Кухни под ключ</span> здесь и сейчас
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col col-min advantage fadeInDown wow" data-wow-delay=".2s">
            <div class="advantage__icon fadeInUp wow">
                <svg class="icn-project" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#00B4EB" stroke-width="2" d="M48 62H13c-1.7 0-3-1.3-3-3V5c0-1.7 1.3-3 3-3h38c1.7 0 3 1.3 3 3v54c0 1.7-1.3 3-3 3h-1" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 200.928, 200.928; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#00B4EB" stroke-width="2" d="M45 6v3c0 1.7-1.3 3-3 3H22c-1.7 0-3-1.3-3-3V6M25.5 7h14M21 23h22M21 29h22M21 35h22M21 41h12M42 45c2.8 0 5 2.2 5 5s-2.2 5-5 5-5-2.2-5-5 2.2-5 5-5" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 158.951, 158.951; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Проектируем</div>
            <div>Делаем замеры и создаем индивидуальный дизайн-проект с учетом особенностей вашей кухни</div>
        </div>
        <div class="col col-min advantage fadeInDown wow" data-wow-delay=".5s">
            <div class="advantage__icon fadeInUp wow">
                <svg class="icn-production" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#E82626" stroke-width="2" d="M41.1 55.3L54 52l-2.5-4.3 9.5-9.3-4.3-2.5 3.6-12.8h-5l-3.3-13-4.3 2.5-9.3-9.5-2.6 4.3L23 3.8v5l-12.9 3.3 2.5 4.3-9.5 9.3 4.3 2.6-3.6 12.8h5L12.1 54l4.3-2.5 9.3 9.5 2.5-4.3L41 60.3" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 214.616, 214.616; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#E82626" stroke-width="2" d="M32 17c8.3 0 15 6.7 15 15s-6.7 15-15 15-15-6.7-15-15 6.7-15 15-15" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 94.2884, 94.2884; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Производим</div>
            <div>Автоматика и опытный персонал гарантируют точность раскроя до 0,1 мм и четкое соблюдение технологии производства</div>
        </div>
        <div class="col col-min advantage fadeInDown wow" data-wow-delay=".8s">
            <div class="advantage__icon fadeInUp wow">
                <svg class="icn-complete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#EDB500" stroke-width="2" d="M22 26l10 10 22-22v-4H10v44h44V21" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 214.255, 214.255; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Комплектуем</div>
            <div>Фурнитура, столешницы, встроенная техника и освещение; комплектуем согласно вашему проекту</div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col col-min advantage fadeInUp wow" data-wow-delay="1.1s">
            <div class="advantage__icon fadeInDown wow">
                <svg class="icn-delivery" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#BD10E0" stroke-width="2" d="M5 44H1V12h36c1.7 0 3 1.3 3 3v29M40 18h11l12 12v14h-4" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 151.702, 151.702; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#BD10E0" d="M51 43.5c.3 0 .5.2.5.5s-.2.5-.5.5-.5-.2-.5-.5.2-.5.5-.5" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 3.1844, 3.1844; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#BD10E0" stroke-width="2" d="M51 38c3.3 0 6 2.7 6 6s-2.7 6-6 6-6-2.7-6-6 2.7-6 6-6M0 34h40" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 77.6807, 77.6807; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#BD10E0" stroke-width="2" stroke-linecap="square" d="M1 54h62" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 62, 62; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#BD10E0" stroke-width="2" d="M21 44h22M13 38c-3.3 0-6 2.7-6 6s2.7 6 6 6 6-2.7 6-6-2.7-6-6-6" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 59.6807, 59.6807; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#BD10E0" d="M13 43.5c-.3 0-.5.2-.5.5s.2.5.5.5.5-.2.5-.5-.2-.5-.5-.5" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 3.18439, 3.18439; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Доставляем</div>
            <div>В удобное для вас время мы доставим новую кухню точно по адресу и бережно поднимем на нужный этаж</div>
        </div>
        <div class="col col-min advantage fadeInUp wow" data-wow-delay="1.4s">
            <div class="advantage__icon fadeInDown wow">
                <svg class="icn-install" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#C42F58" stroke-width="2" d="M3 46.7v.2C2.9 48.6 4.2 50 5.9 50h6.3c1.7 0 3.5-1.4 3.9-3.1l2.7-11.1c.3-1.1.7-2.8 1.9-2.8H33c1.6 0 2.9-1.3 2.9-2.8V16.8c0-1.6-1.3-2.8-2.8-2.8H11.3c-4.9 0-6.3 3.1-6.6 6.6 0 0-.6 14.2-1.4 23.4M41.9 28.5h-6M35.9 18.5h6M41.9 16.5h8c3.9 0 7 3.1 7 7s-3.1 7-7 7h-8v-14zM56.9 23.5H62" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 191.128, 191.128; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#C42F58" stroke-width="2" d="M18.6 36.8h5.5c1.1 0 1.9-.9 1.9-1.9V33M12 18c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 22.9457, 22.9457; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Собираем</div>
            <div>Наши мастера работаю уверенно, потому что знают особенности каждой детали, включая фурнитуру и электрику</div>
        </div>
        <div class="col col-min advantage fadeInUp wow" data-wow-delay="1.7s">
            <div class="advantage__icon fadeInDown wow">
                <svg class="icn-guarantee" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                        <path fill="none" stroke="#7ED321" stroke-width="2" d="M12 13.8l.3-2.1c7.7.9 15-2.7 18.2-4.6l1.5-.9 1.5.9C36.7 9 44 12.7 51.7 11.7c1.8 15 8.8 33.4-15.3 44.4l-2.1.9c-.6.3-2 .8-2 .8l-.3.2-.2-.2s-1.4-.5-2-.8l-2.1-.9C6 46.1 9.5 30.2 11.7 16.2" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 153.224, 153.224; stroke-dashoffset: 0; opacity: 1;"></path>
                        <path fill="none" stroke="#7ED321" stroke-width="2" d="M19.4 30.7l6.6 6.7 18.5-13.6" style="transition: stroke-dashoffset 1s ease-in-out; stroke-dasharray: 32.3658, 32.3658; stroke-dashoffset: 0; opacity: 1;"></path>
                    </svg>
            </div>
            <div class="bold robsl" style="margin-bottom: 25px;">Гарантируем</div>
            <div>Мы даем гарантию 5 лет на всю кухонную мебель, потому что уверены в качестве своей продукции</div>
        </div>
    </div>
    <hr width="70%" color="#76767a">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container">
            <div class="f34 bold robsl uppercase portfolio-title">
                <span class="text-bg-yellow">Реализованные</span><br class="hidden-xs"><span class="text-bg-black" style="padding-left: 25px; padding-right: 25px;">кухни</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col col-big portfolio-item slideInLeft wow" style="background: url('img/kitchen1.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 120 000 грн</span>
                </div>
                <div class="col col-min portfolio-item fadeIn wow" style="background: url('img/kitchen2.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 70 000 грн</span>
                </div>
                <div class="col col-min portfolio-item slideInRight wow" style="background: url('img/kitchen3.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 60 000 грн</span>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col col-min portfolio-item slideInLeft wow" style="background: url('img/kitchen4.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 50 000 грн</span>
                </div>
                <div class="col col-big portfolio-item fadeIn wow" style="background: url('img/kitchen6.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 70 000 грн</span>
                </div>
                <div class="col col-min portfolio-item slideInRight wow" style="background: url('img/kitchen5.png') center/cover no-repeat">
                    <span class="text-bg-yellow f24 portfolio-item-price">от 50 000 грн</span>
                </div>
            </div>
            <div class="row justify-content-center" style="margin: 25px 0;position: relative;">
                <span class="bg-line"></span>
                <div style="position:relative; z-index:5;padding: 0 25px; background-color: #fff;">
                    <a class="btn btn-empty robsl bold" href="#">Все проекты</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 100px 0;">
    <div class="row justify-content-between">
        <div class="container-fluid" style="margin-bottom: 25px;">
            <div class="row justify-content-center align-items-center f34 robsl bold">
                <span class="text-bg-black uppercase">Получите</span>
                <span class="uppercase" style="padding: 15px 10px; border: 1px solid #000;">Бесплатную</span>
                <span class="text-bg-yellow uppercase">консультацию дизайнера</span>
            </div>
        </div>
        <div class="col col-min kristina fadeIn wow" style="position:relative;">
            <div class="row align-items-center slideInRight wow" style="padding-right:25px; position: absolute; width: 1000px; right: 100px; bottom: 0; height: 250px; background-color: #f3f3f3;">
                <div style="width: 100%; text-align: right;">
                    <div class="robsl bold f24">Кристина</div>
                    <div>Дизайнер Мебели</div>
                </div>
            </div>
            <div style="width: 100%; height: 100%; position:absolute; background: url(img/kristina.png) left/contain no-repeat;"></div>
        </div>
        <div class="col col-min">
            <div class="f24 uppercase rob light slideInLeft wow" style="margin-bottom: 30px;">По итогам консультации вы получите:</div>
            <ul class="consult">
                <li>
                    <div class="row justify-content-left fadeInRight wow">
                        <div class="col-1 custom-check"><span></span></div>
                        <div class="col-11">Рекомендации по подбору материалов для кухни.</div>
                    </div>
                </li>
                <li>
                    <div class="row justify-content-left fadeInRight wow" data-wow-delay="0.4s">
                        <div class="col-1 custom-check"><span></span></div>
                        <div class="col-11">Узнаете как эргономично использовать пространство.</div>
                    </div>
                </li>
                <li>
                    <div class="row justify-content-left fadeInRight wow" data-wow-delay="0.8s">
                        <div class="col-1 custom-check"><span></span></div>
                        <div class="col-11">Предварительный расчет стоимости и времени изготовления заказа.</div>
                    </div>
                </li>
                <li>
                    <div class="row justify-content-left fadeInRight wow" data-wow-delay="1.2s">
                        <div class="col-1 custom-check"><span></span></div>
                        <div class="col-11">Заполните форму чтобы специалист ответил на все ваши вопросы и сориентировал вас в стоимости реализации Вашего проекта.</div>
                    </div>
                </li>
                <li>
                    <div class="row justify-content-left">
                        <div class="col-1"></div>
                        <div class="col-11"><a href="https://kitchen.alba.com.ua//#callbackhunter" class="btn btn-prim robsl bold" style="font-size: 1em;">Оставить заявку</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container project">
    <div class="row justify-content-between align-items-center" style="margin-bottom: 20px;">
        <div class="col col-min fadeInLeft wow" style="position: relative;padding: 20px;">
            <div class="robsl light f34 mb20">Woo.Kitchen</div>
            <div class="f14" style="width: 100%;">Дизайн этой кухни создан для ценителей дерева, натуральных структур и эргономики. Основная идея кухни - придать интерьеру натуральности и обьема.</div>
        </div>
        <div class="col col-big fadeIn wow" data-wow-delay="0.6s" style="height: 500px;">
            <div class="project-img" style="background: url(img/woo1.png) center/cover no-repeat; height: 100%;"></div>
        </div>
    </div>
    <div class="row justify-content-between align-items-center" style="margin-bottom: 20px;">
        <div class="col col-min fadeIn wow" data-wow-delay="1.2s">
            <div class="project-img" style="background: url(img/woo2.png) center/cover no-repeat"></div>
        </div>
        <div class="col col-big fadeInRight wow" style="padding: 20px;">
            <div class="robsl light f34 mb20">Отделка</div>
            <div class="f14" style="width: 100%;">Фасады кухни выполнены из шпонированного ясеня с выраженным природным рисунком. Матовый лак подчеркивает естественную красоту дерева. Стены в помещении отделаны красным кирпичом и штукатуркой под бетон. На кухонном фартуке - прозрачное каленное стекло.</div>
        </div>
    </div>
    <div class="row justify-content-between align-items-center" style="margin-bottom: 20px;">
        <div class="col col-min fadeInLeft wow" style="padding: 20px;">
            <div class="robsl light f34 mb20">Детали</div>
            <div class="f14" style="width: 100%;">Еще одна изюминка этой кухни - это стол из ясеня на металлических опорах. Стол не обработан по торцам и не покрыт маслом, чтобы максимально подчеркнуть натуральную фактуру дерева.</div>
        </div>
        <div class="col col-big fadeIn wow" data-wow-delay="1.8s">
            <div class="row">
                <div class="col col-min" style="margin-left: 15px; padding: 0; margin-bottom: 20px;">
                    <div class="project-img" style="background: url(img/woo3.png) center/cover no-repeat"></div>
                </div>
                <div class="col col-min" style="margin-left: 15px; padding: 0; margin-bottom: 20px;">
                    <div class="project-img" style="background: url(img/woo4.png) center/cover no-repeat"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid contact-row">
    <div class="overlay" style="background-color: rgba(0,0,0,0.6);"></div>
    <div class="robsl bold f34 uppercase" style="text-align: center; position: relative;">Обсудим детали вашего проекта <span style="color: #ffc000;">?</span></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <form style="margin-top: 50px;" action="/send.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col styled-input">
                            <input type="text" id="inname" name="name" required />
                            <label class="hel">Имя</label>
                            <span></span>
                        </div>
                        <div class="col styled-input">
                            <input type="tel" id="phone" name="phone" required />
                            <label class="hel">Номер телефона</label>
                            <span></span>
                        </div>
                        <div class="col styled-input">
                            <input type="email" id="email" name="email" required />
                            <label class="hel">Email</label>
                            <span></span>
                        </div>
                        <div class="col">
                            <button class="robsl bold btn-prim" style="" type="submit">Оставить заявку</button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col offset-md-9">
                            <div class="booking-bottom-text">+Вы получите электронный каталог идей для вдохновения</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid details" style="padding: 100px 0;">
    <div class="container details-bg">
        <div class="row justify-content-center">
            <div class="f34 robsl bold uppercase mb50">Почему ваш проект в надежных руках <span style="color: #ffc000;">?</span></div>
        </div>
        <div class="row justify-content-between">
            <div class="col-min detail fadeIn wow" data-wow-delay="0.2s">
                <div class="details-num">01.</div>
                <div class="details-text">Мы являемся производителями<br>мебели <font style="font-weight:  bold">полного цикла</font></div>
            </div>
            <div class="col-min detail hid-sm fadeIn wow" data-wow-delay="1.2s">
                <div class="details-num">03.</div>
                <div class="details-text">Наши специалисты работают с<br>мебелью уже <font style="font-weight:  bold">более 6 лет.</font><br>Научены реальным опытом.</div>
            </div>
            <div class="col-min detail hid-lg">
                <div class="details-num ">02.</div>
                <div class="details-text">Выполним индивидуальный<br>проект <font style="font-weight:  bold">любой сложности</font></div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-min detail hid-sm fadeIn wow" data-wow-delay="0.8s">
                <div class="details-num">02.</div>
                <div class="details-text">Выполним индивидуальный<br>проект <font style="font-weight:  bold">любой сложности</font></div>
            </div>
            <div class="col-min detail hid-lg">
                <div class="details-num">03.</div>
                <div class="details-text">Наши специалисты работают с<br>мебелью уже <font style="font-weight:  bold">более 6 лет.</font><br>Научены реальным опытом.</div>
            </div>
            <div class="col-min detail fadeIn wow" data-wow-delay="1.6s">
                <div class="details-num">04.</div>
                <div class="details-text">Работаем только <font style="font-weight:  bold">с импортными<br>материалами и фурнитурой.<br></font>У нас высокие стандарты качества.</div>
            </div>
        </div>
    </div>
    <hr class="align-self-center mb50" width="40%" height="2px">
    <div class="container-fluid bounceIn wow" data-wow-delay="2s">
        <div class="row justify-content-center">
            <div class="robsl bold f34 uppercase mb50">
                Дополнительные плюсы
            </div>
        </div>
    </div>
    <div class="container bounceIn wow" data-wow-delay="2s">
        <div class="row justify-content-center align-items-center">
            <div class="col-min" style="margin: 20px;">
                <div class="row  justify-content-between align-items-center">
                    <div class="col details-add" style="padding: 25px;border: 1px solid #fff;">
                        <img src="img/house_icon.png" style="width: 75px; height: 75px;">
                    </div>
                    <span class="col" style="min-width: 220px;">
                            Полный спектр дополнительных товаров и услуг.<br>От дизайн-проекта до полной его реализации
                        </span>
                </div>
            </div>
            <div class="col-min" style="margin: 20px;">
                <div class="row  justify-content-between align-items-center">
                    <div class="col details-add" style="padding: 25px;border: 1px solid #fff;">
                        <img src="img/cash_icon.png" style="width: 75px; height: 75px;">
                    </div>
                    <span class="col" style="min-width: 220px;">
                        Оплата в удобной для вас форме: нал, безнал, терминал, bitcoin
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 100px 0;">
    <div class="row justify-content-center" style="margin-bottom: 50px;">
        <div class="robsl bold f24 uppercase text-center">
            Кухня должна <span class="text-bg-yellow">служить долго,</span> поэтому мы заботимся о каждой мелочи
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col col-min fadeInDown wow" data-wow-delay="0.2s">
            <div class="advantage__icon">
                <svg class="icn-setonhorizont" xmlns="http://www.w3.org/2000/svg" viewBox="-442 239 75 84">
                        <path fill="none" stroke="#7ED321" stroke-width="2" d="M-404.4 255h21.4v10h-43v-10h21.6" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#7ED321" stroke-width="2" d="M-391 260c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2M-418 260c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2M-410 255v2c0 1.1.8 2 1.7 2h7.7c.9 0 1.7-.9 1.7-2v-2M-379 313h-54v-4h57v5M-433 309v-40h57v40M-404.5 269v40M-410 278v10M-399 278v10" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                    </svg>
            </div>
            <div class="text-center">Устанавливаем кухню<br>по уровню</div>
        </div>
        <div class="col col-min fadeInUp wow" data-wow-delay="0.6s">
            <div class="advantage__icon">
                <svg class="icn-cutholes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 84">
                        <path fill="none" stroke="#E82626" stroke-width="2" d="M7 46c0-12.7 10.4-23 23.2-23H52v-2.1c0-1.6 1.3-2.9 2.9-2.9h10.2c1.6 0 2.9 1.3 2.9 2.9v33.5c0 5.3-4.3 9.6-9.7 9.6H16.7C11.3 64 7 59.7 7 54.4V46zM61 64v20M31 51v8M27 51v8M23 51v8M19 51v8M49 64v3M41 64v3M33 64v3M25 64v3" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#E82626" stroke-width="2" d="M19 43v-5.5c0-4.7 4-8.5 9-8.5h24v17H18" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#E82626" stroke-width="2" d="M43 32v1.5c0 .8.7 1.5 1.5 1.5H52M13 70v2c0 1.1.9 2 2 2h50c1.1 0 2-.9 2-2v-2M57 64v6H17v-6M52 23v6M68 30h-3c-1.7 0-3 1.3-3 3v21" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                    </svg>
            </div>
            <div class="text-center">Продумываем все отверстия<br>и доступ к коммуникациям</div>
        </div>
        <div class="col col-min fadeInDown wow" data-wow-delay="1s">
            <div class="advantage__icon">
                <svg class="icn-montage" xmlns="http://www.w3.org/2000/svg" viewBox="-442 239 75 84">
                        <path fill="none" stroke="#BD10E0" stroke-width="2" d="M-393.1 270h8.3c1 0 1.9.8 1.9 1.9V287H-395v-15.1c0-1.1.8-1.9 1.9-1.9zM-401 283.3l6-2.3v6h-6v-3.7zM-389 266h-3v-3c0-1.7 1.3-3 3-3s3 1.3 3 3v3h-3" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#BD0FE1" stroke-width="2" d="M-378 309h-54M-431 309v-22h52v22M-383 314v-5h-44v4h41M-406 267v20h-4v-20h4M-426 287v-5l.8-2.6V276h4.5v3.4l.7 2.6v5h-6M-423 261h-1v-2h2v2h-1" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#BD0FE1" stroke-width="2" d="M-403.4 267h-9.9c-2.7 0-2.7 2-2.7 2h-2v-3.8c0-4.1 3.7-5.8 5.5-6.3h9.1c.9.5 2.7.5 3.6 0h1.8v8h-1.8c-1-.4-2.6-.4-3.6.1zM-423 277v-15M-389 260v-5M-389 287v-4M-391 270v-4M-387 270v-4M-389 275c1.7 0 3 1.3 3 3s-1.3 3-3 3-3-1.3-3-3 1.3-3 3-3M-390 299h-30c-1.7 0-3-1.3-3-3s1.3-3 3-3h30c1.7 0 3 1.3 3 3s-1.3 3-3 3" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                    </svg>
            </div>
            <div class="text-center">Монтируем полки, технику,<br>фартук, подсветку</div>
        </div>
        <div class="col col-min fadeInUp wow" data-wow-delay="1.4s">
            <div class="advantage__icon">
                <svg class="icn-clean" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 84">
                        <path fill="none" stroke="#0085CC" stroke-width="2" d="M56 66h12v4H56zM70 74H50v-4h23v5M6 62V43.5C6 32.7 14.5 24 25 24s19 8.7 19 19.5V62" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#0085CC" stroke-width="2" d="M25 55c-5.5 0-10-5.4-10-12s4.5-12 10-12 10 5.4 10 12-4.5 12-10 12" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                        <path fill="none" stroke="#0085CC" stroke-width="2" d="M25 35c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4M19 25v-3c0-1.7 1.3-3 3-3h6c1.7 0 3 1.3 3 3v3M6 62h6v12H6V62M44 62v12h-6V62h6M18 62h14-14zM18 66h14-14zM12 72h23-23zM6.9 37.6C3.4 38.8 1 42.5 1 46.8c0 3.8 2.1 7.3 5 8.9l-.3-.2M60 31L44 47M64 32l7.9-7.9c1.2-1.2 2.1-3.5 2.1-5.1V8c0-3.9-3.1-7-7-7s-7 3.1-7 7v58h4V8c0-1.7 1.3-3 3-3s3 1.3 3 3v10c0 1.7-1 3.9-2.1 5.1L64 27M44 52l16-16M70 16h4M60 12h4" style="transition: stroke-dashoffset 1s ease-in-out; opacity: 1; stroke-dashoffset: 0;"></path>
                    </svg>
            </div>
            <div class="text-center">После монтажа убираем за собой</div>
        </div>

    </div>
</div>
<div class="container-fluid" style="position: relative;">
    <div class="row">
        <div class="container fadeInLeft wow" data-wow-delay="2s" style="padding: 50px 0;background: url(img/bg-lines-yellow.png);background-position: left top;background-repeat: no-repeat;">
            <div style="position: absolute; bottom: 0;left: 0;background-color: #f3f3f3;width:100%;height: 70%;"></div>
            <div class="row justify-content-center align-item-center">
                <div class="col shipping" style="max-width: 1000px; background: url(img/delivery.png) center/cover no-repeat; padding: 100px;">
                    <div class="row justify-content-center align-items-center">
                        <div class="col col-big">
                            <div class="f52 robsl bold uppercase mb20">
                                Доставка <span style="color: #ffc000;">.</span>
                            </div>
                            <div class="mb20">Изготовить кухню - еще не вся работа. После изготовления её нужно доставить по адресу, бережно поднять на этаж и аккуратно смонтировать. Мы предлагаем все услуги в комплексе, потому что заботимся о клиентах и хотим, чтобы все качество вашей кухни не зависело от посредников.</div>
                            <a href="https://kitchen.alba.com.ua//#callbackhunter" class="btn btn-prim robsl bold">Консультация</a>
                        </div>
                        <div class="col-min hidden-md">
                            <img src="img/delivery-truck.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container steps" style="padding: 100px 0;">
    <div class="row justify-content-between align-items-center">
        <div class="col col-min one-click">
            <img class="pay-per-click" src="img/pay-per-click.png">
            <div class=" robsl f24 bold uppercase" style="position: relative;z-index: 5;">
                <span class="text-bg-yellow">До новой</span> кухни<br class="hidden-xs"><span class="text-bg-black" style="padding-left: 25px; padding-right: 25px;">один клик</span>
            </div>
            <div class="uppercase" style="margin: 20px 0;position: relative">
                и всё это не выходя из дома
            </div>
            <a href="https://kitchen.alba.com.ua//#callbackhunter" class="btn btn-empty robsl bold" style="position: relative;z-index: 5;">Оставить заявку</a>
        </div>
        <div class="col-big steps-items fadeInUp wow" data-wow-delay="0.4s">
            <div class="overlay"></div>
            <div class="row justify-content-around">
                <div class="col col-min steps-item">
                    <div class="row justify-content-start align-items-center fadeInLeft wow" data-wow-delay="0.6s">
                        <div class="">
                            <div class="steps-num">01<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Вызвать дизайнера</font>
                            <br>
                            замер помещения и<br>консультация дизайнера
                        </div>
                    </div>
                </div>
                <div class="col col-min steps-item hid-sm fadeInRight wow" data-wow-delay="1.2s">
                    <div class="row justify-content-start align-items-center">
                        <div class="">
                            <div class="steps-num">03<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Внести предоплату</font>
                            <br>картой или наличными, <br>или криптовалютой</div>
                    </div>
                </div>
                <div class="col col-min steps-item hid-lg">
                    <div class="row justify-content-start align-items-center">
                        <div class="">
                            <div class="steps-num">02<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Согласовать проект</font>
                            <br>
                            дизайнер разработает<br>авторский проект кухни</div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around">
                <div class="col col-min steps-item hid-sm fadeInLeft wow" data-wow-delay="0.8s">
                    <div class="row justify-content-start align-items-center">
                        <div class="">
                            <div class="steps-num">02<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Согласовать проект</font>
                            <br>
                            дизайнер разработает<br>авторский проект кухни</div>
                    </div>
                </div>
                <div class="col col-min steps-item hid-lg">
                    <div class="row justify-content-start align-items-center">
                        <div class="">
                            <div class="steps-num">03<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Внести предоплату</font>
                            <br>картой или наличными, <br>или криптовалютой</div>
                    </div>
                </div>
                <div class="col col-min steps-item fadeInRight wow" data-wow-delay="1.6s">
                    <div class="row justify-content-start align-items-center">
                        <div class="">
                            <div class="steps-num">04<font style="color: #ffc000">.</font></div>
                        </div>
                        <div class="col">
                            <font class="robsl bold">Получить кухню</font>
                            <br>Через 35 дней кухня<br>будет готова к монтажу</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid block-big" style="padding:100px 15px; background: url(img/quality.png) center/cover no-repeat;">
    <div class="row height align-items-center justify-content-center" style="color: #fff;text-align: center">
        <div class="container  f34 robsl bold">Теперь вы знаете наш подход<br>и отношение к качеству производства</div>
        <div class="container f19 bold">Но вы не знаете еще один наш секрет, который делает<br>наших клиентов счастливыми на долгое время</div>
        <div class="container">
            <img src="img/quality-icon.png" style="width: 250px;">
        </div>
        <div class="container-fluid f19 bold">Дело в том, что мы уверены в качестве своей продукции на все 100%,<br>и поэтому даем гарантию 5 лет и сервисное обслуживание на всю мебель</div>
    </div>
</div>
<div class="container-fluid squares-bg fadeIn wow">
    <div class="container">
        <div class="row justify-content-center">
            <div class="robsl f34 text-center" style="margin-bottom: 50px;">
                Наши <span class="text-bg-yellow">дизайнеры</span> разработают<br>
                авторский проект мебели<br>
                специально для <span class="text-bg-black">Вас</span>
            </div>
        </div>
        <div id="response" class="response row justify-content-center fadeInUp wow" data-wow-delay="0.2">
            <div class="col" style="max-width: 600px;">
                <div class="booking text-center" style="background-color: #f7f7f7; padding: 50px 0;">
                    <div class="robsl f30">Получить консультацию</div>
                    <div class="booking-form" style="">
                        <form action="/send.php" method="post">
                            <div class="styled-input">
                                <input type="text" id="inname" name="name" required />
                                <label class="hel">Имя</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="tel" id="phone" name="phone" required />
                                <label class="hel">Номер телефона</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" id="email" name="email" required />
                                <label class="hel">Email</label>
                                <span></span>
                            </div>
                            <button class="btn-prim f19 robsl" type="submit">Оставить заявку</button>
                        </form>
                        <div class="booking-bottom-text">+Вы получите электронный каталог идей для вдохновения</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="ftr_head container justify-content-between bold">
        <img src="img/logo2.png">
        <div class="f19" style="color: #fff;">Ателье авторской мебели</div>
        <div class="street">
            <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="icon-text f19">г. Киев | г. Днепр | г.Запорожье</div>
        </div>
        <a href="#" class="btn btn-empty">Заказать звонок</a>
    </div>

    <div class="brd container"></div>

    <div class="ftr_other container justify-content-between robsl">
        <div class="loc justify-content-between">
            <div class="street">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="icon-text f19">info@alba.com.ua</div>
            </div>
            <div class="tlf">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="icon-text f19">+38(096) 717-73-73</div>
            </div>
            <div class="date">
                <div class="icon">
                    <i class="far fa-clock"></i>
                </div>
                <div class="icon-text f19">Пн-Пт с 10-19. Сб 10-16</div>
            </div>
        </div>

        <div class="social">
            <div class="icon">
                <a href="https://www.facebook.com/alba.mebel" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
            <div class="icon">
                <a href="https://www.instagram.com/alba.com.ua/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="icon">
                <a href="https://www.youtube.com/channel/UCNWjNCz-B_OFmQ1oTscAKGg" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'Oj5yfHwJES';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=d8b9aad5efc9ca96e232e6aabe25ba2a" charset="UTF-8"></script>
</body>
</html>
