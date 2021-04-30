<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
<head>
    <!-- Site Title-->
    <title>Центр стратегического прогнозрования</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"></link>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css') }}"></link>
</head>
<body>
<div class="ie-panel">
    <a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
</div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Загрузка...</p>
    </div>
</div>
<!-- Page-->
<div id="app" class="page">
    <!-- Page Header-->
    <header class="page-head header-panel-absolute ">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-default" data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                        <h4 class="panel-title d-lg-none">@if(isset($link)) {{ $link }} @endif</h4>
                        <!-- RD Navbar Right Side Toggle-->
                        <button class="rd-navbar-top-panel-toggle d-lg-none" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                        <div class="rd-navbar-top-panel">
                            <div class="rd-navbar-top-panel-left-part">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="unit flex-row align-items-center unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                                            <div class="unit-body"><a href="tel:#">{{ \App\Address::first()->phone }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row align-items-center unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                                            <div class="unit-body"><a href="#">{{ \App\Address::first()->index }}, РБ, {{ \App\Address::first()->city }}, {{ \App\Address::first()->street }}, {{ \App\Address::first()->house }}</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit flex-row align-items-center unit-spacing-xs">
                                            <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                                            <div class="unit-body"><a href="mailto:#">{{ \App\Address::first()->email }}</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="rd-navbar-top-panel-right-part">
                                <div class="rd-navbar-top-panel-left-part">
                                    <div class="unit flex-row align-items-center unit-spacing-xs">
                                        <div class="unit-left"><a href="#" class="icon mdi mdi-facebook-box text-middle"></a></div>
                                        <div class="unit-left"><a href="#" class="icon mdi mdi-vk-box text-middle"></a></div>
                                        <div class="unit-body"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-menu-wrap clearfix">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="d-inline-block" href="{{ url('/') }}">
                                <div class="unit align-items-sm-center unit-xl flex-column flex-xxl-row unit-spacing-custom">
                                    <div class="unit-left">
                                       {{-- <img width='170' height='172' src='images/logo-170x172.png' alt=''/>--}}
                                    </div>
                                    <div class="unit-body text-xxl-left">
                                        <div class="rd-navbar-brand-title text-center">Центр стратегического</div>
                                        <div class="rd-navbar-brand-title text-center">прогнозирования</div>
                                    </div>
                                </div></a></div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <div class="rd-navbar-mobile-header-wrap">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand">
                                        <a href="{{ url('/') }}">
                                           {{-- <img width='136' height='138' src='images/logo-170x172.png' alt=''/></a>--}}
                                    </div>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li><a href="{{ url('/information') }}">Об организации</a>
                                    </li>
                                    <li><a href="{{ url('/courses') }}">Курсы</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="{{ url('/courses') }}">Hard skills </a>
                                            </li>
                                            <li><a href="{{ url('/courses') }}">Soft skills</a>
                                            </li>
                                            <li><a href="{{ url('/courses') }}">Еще одно направление</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/events') }}">События</a>
                                    </li>

                                    <li><a href="{{ url('/news') }}">Новости</a>
                                    </li>

                                    <li><a href="{{ url('/contacts') }}">Контакты</a>
                                    </li>
                                </ul>
                                <!--RD Navbar Mobile Search-->
                                <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                    <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label" for="rd-navbar-mobile-search-form-input">Search...</label>
                                            <input class="rd-navbar-search-form-input form-input form-input-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                                        </div>
                                        <button class="icon fa fa-search rd-navbar-search-button" type="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--RD Navbar Search-->
                        <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                            <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                                    <input class="rd-navbar-search-form-input form-input form-input-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')

    <!-- Footer Corprorate-->
    <!-- Corporate footer-->
    <footer class="page-footer">
        <div class="hr bg-gray-light"></div>
        <div class="container section-xs block-after-divider">
            <div class="row row-50 justify-content-xl-between justify-content-sm-center">
                <div class="col-lg-3 col-xl-2 text-center">
                    <!--Footer brand-->
                    <a class="d-inline-block" href="{{ url('/') }}">
                        {{--<img width='170' height='172' src='images/logo-170x172.png' alt=''/>--}}
                        <div>
                            <h6 class="barnd-name font-weight-bold offset-top-25">Центр стратегического</h6>
                        </div>
                        <div>
                            <h6 class="barnd-name font-weight-bold">прогнозирования</h6>
                        </div>
                    </a>
                </div>
                <div class="col-sm-10 col-lg-5 col-xl-4 text-xl-left">
                    <h6 class="font-weight-bold">Контакты</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                        <ul class="list-unstyled contact-info list">
                            <li>
                                <div class="unit flex-row align-items-center unit-spacing-xs">
                                    <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                                    <div class="unit-body">
                                        <a class="d-block d-lg-inline-block text-dark" href="tel:#">{{ \App\Address::first()->phone }}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="offset-top-15">
                                <div class="unit flex-row align-items-center unit-spacing-xs">
                                    <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                                    <div class="unit-body text-left"><a class="text-dark" href="#">{{ \App\Address::first()->index }}, РБ, {{ \App\Address::first()->city }}, {{ \App\Address::first()->street }}, {{ \App\Address::first()->house }}</a></div>
                                </div>
                            </li>
                            <li class="offset-top-15">
                                <div class="unit flex-row align-items-center unit-spacing-xs">
                                    <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                                    <div class="unit-body"><a href="mailto:#">{{ \App\Address::first()->phone }}</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="offset-top-15 text-left">
                        <ul class="list-inline list-inline-xs list-inline-madison">
                            <li><a class="icon icon-xxs fa fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon icon-xxs fa fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon icon-xxs fa fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon icon-xxs fa fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-8 col-xl-4 text-xl-left">
                    <h6 class="font-weight-bold">Страницы</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30 text-left">
                       <ul>
                           <li class="pb-2"><a href="#">Отзывы</a></li>
                           <li class="pb-2"><a href="#">Часто задаваемые вопросы</a></li>
                           <li class="pb-2"><a href="#">Вакансии</a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-madison context-dark text-center">
            <div class="container text-lg-left section-5">
                <p class="rights"><span>&copy;&nbsp;</span>
                    <span class="copyright-year"></span>
                    <span>.&nbsp;</span><span>Все права защищены</span><span>.&nbsp;</span><a href="#">Центр стратегического прогнозирования</a></p>
            </div>
        </div>
    </footer>
</div>




<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script src="{{ mix('/js/app.js') }}"></script>
{{--<script src="{{ mix('/js/script.js') }}"></script>--}}
<script src="{{ asset('js/core.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
