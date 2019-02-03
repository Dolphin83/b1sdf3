<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
<head>
    <!-- Site Title-->
    <title>Главная</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Open+Sans:300,400,700,800&amp;subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <!--[if lt IE 10]>
    <div
        style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            src="/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page text-center">
    <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
            <nav data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                 data-stick-up-offset="210" data-xl-stick-up-offset="85" class="rd-navbar rd-navbar-default"
                 data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static"
                 data-lg-stick-up="true">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle">
                            <span></span></button>
                        <h4 class="panel-title veil-md">Fast Food</h4>
                        <!-- RD Navbar Right Side Toggle-->
                    </div>
                    <div class="rd-navbar-menu-wrap clearfix">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a href="/" class="reveal-inline-block">
                                <div class="unit unit-xs-middle unit-xl unit-xl-horizontal unit-spacing-xxs">
                                    <div class="unit-left"><img width='89' height='89' src='/images/logo-170x172.png' alt=''/></div>
                                    <div class="unit-body text-xl-left">
                                        <div class="rd-navbar-brand-title">Fast Food</div>
                                        <div class="rd-navbar-brand-slogan">Рецепты</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <div class="rd-navbar-mobile-header-wrap">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand">
                                        <a href="/">
                                            <img width='89' height='89' src='/images/logo-170x172.png' alt=''/>
                                        </a>
                                    </div>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li><a href="/">Главная</a></li>
                                    <li><a href="#">О сайте</a></li>
                                    <li><a href="{{ route('recipe.list') }}">Рецепты</a></li>
                                    <li><a href="{{ route('recipe.tags') }}">Тэги</a></li>
                                    <li><a href="{{ route('subscribe') }}">Подписка</a></li>
                                </ul>
                                <!--RD Navbar Mobile Search-->
                                <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                                    <form action="#" method="POST"
                                          class="rd-navbar-search-form search-form-icon-right rd-search">
                                        <div class="form-group">
                                            <label for="rd-navbar-mobile-search-form-input"
                                                   class="form-label">Поиск...</label>
                                            <input id="rd-navbar-mobile-search-form-input" type="text" name="s"
                                                   autocomplete="off"
                                                   class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                                        </div>
                                        <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--RD Navbar Search-->
                        <div class="rd-navbar-search">
                            <a data-rd-navbar-toggle=".rd-navbar-search" href="#"
                               class="rd-navbar-search-toggle mdi"><span></span></a>
                            <form action="search-results.html" data-search-live="rd-search-results-live" method="GET"
                                  class="rd-navbar-search-form search-form-icon-right rd-search">
                                <div class="form-group">
                                    <label for="rd-navbar-search-form-input" class="form-label">Поиск</label>
                                    <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"
                                           class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                                    <div id="rd-search-results-live" class="rd-search-results-live"></div>
                                </div>
                            </form>
                        </div>
                        <!--RD Navbar shop-->
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('breadcrumb')
    @yield('content')
    <footer class="page-footer offset-top-50">
        <div class="shell-wide">
            <div class="hr bg-gray-light"></div>
        </div>
        <div class="shell section-60">
            <div class="range range-lg-justify range-xs-center">
                <div class="cell-md-3 cell-lg-2">
                    <!--Footer brand-->
                    <a href="/" class="reveal-inline-block">
                        <img width="146" height="146" src="/images/logo-170x172.png" alt="">
                        <div>
                            <h6 class="barnd-name text-bold offset-top-25">Fast Food</h6>
                        </div>
                        <div>
                            <p class="brand-slogan text-gray font-accent">Рецепты</p>
                        </div>
                    </a>
                </div>
                <div class="cell-xs-10 cell-md-10 cell-lg-10 text-lg-left offset-top-25 offset-md-top-0">

                    <div>
                        <p>Введя свой номер телефона и подтвердив подписку, пользователь соглашается на активацию
                            пробного периода в течение 48 часов и дальнейшие списания в размере стоимости доступа за
                            пользование сервисом по готовым домашним заданиям без ограничений до момента отписки.
                            Стоимость доступа составляет 30.00 рублей (включая НДС) в сутки для абонентов Tele2.
                            Стоимость услуги для абонентов ПАО «МТС» составляет 30 рублей с НДС за 1 календарный день.
                            Доступ для абонентов ПАО «ВымпелКом» предоставляется без пробного периода. Стоимость доступа
                            составляет 35.00 рублей (включая НДС) за 1 день для абонентов ПАО «ВымпелКом». Доступ для
                            абонентов ПАО «МегаФон» предоставляется без пробного периода. Стоимость доступа составляет
                            35 рублей (включая НДС) за 1 день для абонентов ПАО «МегаФон»</p>
                        <p>Отписаться можно, отправив сообщение стоп на номер 3351 или в <a href="#">личном кабинете</a></p>
                    </div>
                    <h6 class="text-bold offset-top-50">Условия оказания услуг</h6>
                    <div class="text-subline"></div>

                    <div class="offset-top-25 text-left">
                        <ul class="list-inline list-inline-sm list-inline-madison">
                            <li><a href="#" class="icon icon-xxs"><img src="/images/operators/logo-mega.jpg" alt=""></a></li>
                            <li><a href="#" class="icon icon-xxs"><img src="/images/operators/logo-mts.jpg" alt=""></a></li>
                            <li><a href="#" class="icon icon-xxs"><img src="/images/operators/logo-bee.jpg" alt=""></a></li>
                            <li><a href="#" class="icon icon-xxs"><img src="/images/operators/logo-tele2.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    {{--
                    <div class="offset-top-25 text-left">
                        <p>Общество с ограниченной ответственностью "ГДЗ Медиа"</p>
                        <p>ОГРН 1177456059880</p>
                        <p>ИНН 7447273924</p>
                        <p>КПП 744701001

                        <p>454084, ОБЛАСТЬ ЧЕЛЯБИНСКАЯ, ГОРОД ЧЕЛЯБИНСК, УЛИЦА КИРОВА, ДОМ 19, ПОМЕЩЕНИЕ 18</p>
                    </div>
                    --}}
                </div>

            </div>
        </div>
        <div class="bg-madison context-dark">
            <div class="shell text-md-left section-15">
                <p>&copy; <span id="copyright-year"></span> Fast Food Рецепты. Все права защищены <a
                        href="#"> Согласие на обработку персональных данных </a> <a href="#">
                        Обращение к пользователям</a></p>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- PhotoSwipe Gallery-->
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- Java script-->
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
