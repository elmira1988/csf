@extends('layouts.app')

@section('content')
    <section class="section text-center">
    <!-- Swiper-->
    <div class="swiper-container swiper-slider swiper-slider-2 " data-autoplay="true" data-height="42.1875%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="images/slide-01-1920x810.jpg" style="background-position: 80% center">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-sm-center justify-content-xl-start">
                            <div class="col-lg-9 text-lg-left col-sm-10">
                                <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <h1 class="font-weight-bold">
                                        <a href="#" style="color:#3A1659">Вдохновение, инновации и открытия.</a></h1>
                                </div>
                                <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    <h5 >Любая успешная карьера начинается с хорошего образования. Вместе с нами Вы получите более глубокие знания по темам, которые будут особенно полезны для вас при восхождении по карьерной лестнице.
                                    </h5>
                                </div>
                                <div class="offset-top-20 offset-xl-top-40" data-caption-animate="fadeInUp" data-caption-delay="400">
                                    <a class="btn button-primary" href="login-register.html">Записаться</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slide-02-1920x810.jpg" style="background-position: 80% center">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-sm-center justify-content-xl-start">
                            <div class="col-lg-9 text-lg-left col-sm-10">
                                <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <h1 class="font-weight-bold"><a href="#">Инвестируйте в знания</a></h1>
                                </div>
                                <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    <h5>В Центре Стратегического Прогонозирования вы можете преуспеть во многих областях исследований и получить выгоду от инвестиций в свое образование и знания, которые помогут вам стать опытным специалистом.</h5>
                                </div>
                                <div class="offset-top-20 offset-xl-top-40" data-caption-animate="fadeInUp" data-caption-delay="400">
                                    <a class="btn button-primary" href="#">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/slide-03-1920x810.jpg" style="background-position: 80% center">
                <div class="swiper-slide-caption">
                    <div class="container">
                        <div class="row justify-content-sm-center justify-content-xl-start">
                            <div class="col-lg-9 text-lg-left col-sm-10" style="color:#3A1659">
                                <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <h1 class="font-weight-bold"><a href="#" style="color:#3A1659">Создавая будущее</a></h1>
                                </div>
                                <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-xl-right-100" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    <h5 style="color:#3A1659">Стройте свое будущее вместе с нами! Образовательные программы нашего Центра дадут Вам необходимые навыки, обучение и знания, чтобы все, чему вы здесь научились, работало на вас в будущем.</h5>
                                </div>
                                <div class="offset-top-20 offset-xl-top-40" data-caption-animate="fadeInUp" data-caption-delay="400">
                                    <a class="btn button-primary" href="#">Подробнее</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
    </div>
</section>
    <!-- Setion About Us-->
    <!-- A Few Words About the University-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-50 text-lg-left justify-content-md-between">
                <div class="col-lg-7 view-animate fadeInRightSm delay-04">
                    <div class="img-wrap-2">
                        <figure><a class="icon mdi mdi-play-circle-outline" data-lightgallery="item" href="https://youtu.be/09OOQyemsa4"></a>
                            <img class="img-responsive d-inline-block" src="images/home-01-620-350.jpg" width="620" height="350" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h2 class="home-headings-custom font-weight-bold view-animate fadeInLeftSm delay-06">
                        <span class="first-word">О центре</h2>
                    <div class="offset-top-35 offset-lg-top-60 view-animate fadeInLeftSm delay-08">
                        <p>Здесь может быть видео с информацией о Центре стратегического прогнозирования. А здесь может просто текст.
                            Здесь может быть видео с информацией о Центре стратегического прогнозирования. А здесь может просто текст.
                            Здесь может быть видео с информацией о Центре стратегического прогнозирования. А здесь может просто текст.</p>
                    </div>
                    <div class="offset-top-30 view-animate fadeInLeftSm delay-1">
                        <a href="#" class="btn btn-icon btn-icon-right button-primary">
                            <span class="icon fa fa-arrow-right"></span><span>читать дальше</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section text-center parallax-container section-xl" data-parallax-img="images/7553796709253601.jpg">
        <div class="parallax-content">
            <div class="container">
                <h2 class="font-weight-bold view-animate fadeInUpSmall delay-04">Направления курсов</h2>
                <hr class="divider bg-default view-animate fadeInUpSmall delay-06">
                <div class="offset-top-35 offset-lg-top-60 text-base view-animate fadeInUpSmall delay-08">
                    Образовательные программы нашего Центра дадут Вам необходимые навыки, обучение и знания,
                    <br class="d-none d-xl-inline">
                    чтобы все, чему вы здесь научились, работало на вас в будущем.</div>
                <div class="row row-30 justify-content-sm-center offset-top-60">
                    <div class="col-md-6 col-lg-4">
                        <article class="post-news bg-default post-news-mod-2 view-animate fadeInRightSm delay-08">
                            <a href="#">
                                <img class="img-responsive" src="images/home-06-370x240.jpg" width="370" height="240" alt="">
                            </a>
                            <div class="post-news-body-variant-1">
                                <h6>
                                    <a href="#">Soft Skills</a>
                                </h6>
                                <a class="btn button-primary" href="{{ url('/courses') }}">смотреть все курсы</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="post-news bg-default post-news-mod-2 view-animate fadeInLeftSm delay-06">
                            <a href="#">
                                <img class="img-responsive" src="images/home-08-370x240.jpg" width="370" height="240" alt="">
                            </a>
                            <div class="post-news-body-variant-1">
                                <h6>
                                    <a href="#">Hard Skills</a>
                                </h6>
                                <a class="btn button-primary" href="{{ url('/courses') }}">смотреть все курсы</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="post-news bg-default post-news-mod-2 view-animate fadeInLeftSm delay-08">
                            <a href="#">
                                <img class="img-responsive" src="images/home-09-370x240.jpg" width="370" height="240" alt="">
                            </a>
                            <div class="post-news-body-variant-1">
                                <h6>
                                    <a href="#">Sociology</a>
                                </h6>
                                <a class="btn button-primary" href="{{ url('/courses') }}">смотреть все курсы</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section bg-catskill section-xl text-center">
        <div class="container container-wide">
            <h2 class="font-weight-bold">События</h2>
            <hr class="divider bg-madison">
            <div class="row row-50 offset-top-60 justify-content-sm-center">
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="images/events/event_1.jpg" width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark">
                                <div class="offset-top-20">
                                    <a class="btn button-default" href="#" tabindex="0">подробнее</a></div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">16</div>
                                    <p class="d-inline-block d-xl-block">Янв</p>
                                    <span class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">09:00</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href="#" tabindex="0">Наименование мероприятия</a></h6>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="images/events/event_2.jpg" width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark">
                                <div class="offset-top-20">
                                    <a class="btn button-default" href="#" tabindex="0">подробнее</a></div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">18</div>
                                    <p class="d-inline-block d-xl-block">Янв</p>
                                    <span class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">11:00</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href="#" tabindex="0">Лекция по матемтика</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li>
                                            <a href="#" tabindex="0">
                                                <span class="icon icon-xxs mdi mdi-account-outline text-middle"></span>
                                                <span class="inset-left-10 text-dark text-middle">Владимир Сергеевич Куликов</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="images/events/event_3.jpg" width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark">
                                <div class="offset-top-20">
                                    <a class="btn button-default" href="#" tabindex="0">подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">22</div>
                                    <p class="d-inline-block d-xl-block">Янв</p>
                                    <span class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">12:00</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href="#" tabindex="0">Открытый урок по астрономии</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="#" tabindex="0">
                                                <span class="icon icon-xxs mdi mdi-account-outline text-middle"></span>
                                                <span class="inset-left-10 text-dark text-middle">Сергей Викторович Меньшов</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-5 col-xxl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="images/events/event_4.jpg" width="420" height="420" alt="">
                            <div class="post-event-overlay context-dark">
                                <div class="offset-top-20">
                                    <a class="btn button-default" href="#" tabindex="0">подробнее</a></div>
                            </div>
                        </div>
                        <div class="unit unit-lg flex-column flex-xl-row">
                            <div class="unit-left">
                                <div class="post-event-meta text-center">
                                    <div class="h3 font-weight-bold d-inline-block d-xl-block">25</div>
                                    <p class="d-inline-block d-xl-block">Янв</p><span class="font-weight-bold d-inline-block d-xl-block inset-left-10 inset-xl-left-0">13:00</span>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="post-event-body text-xl-left">
                                    <h6><a href="#" tabindex="0">Лекция по философии</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="#" tabindex="0">
                                                <span class="icon icon-xxs mdi mdi-account-outline text-middle"></span>
                                                <span class="inset-left-10 text-dark text-middle">Валерий Иванович Шипков</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="offset-top-50 offset-lg-top-56">
                <a class="btn btn-icon btn-icon-right button-primary" href="{{ url('/events') }}">
                    <span class="icon fa fa-arrow-right"></span><span>смотреть полностью</span>
                </a>
            </div>
        </div>
    </section>

    <section class="section section-xxl text-center parallax-container" data-parallax-img="images/parallax-03.jpg">
        <div class="parallax-content">
            <div class="container context-dark">
                <h2 class="font-weight-bold">Нас выбирают более 1000 студентов</h2>
                <div class="offset-top-35">Наши курсы успешно прошли уже более 1000 человек</div>
                <div class="offset-top-35 offset-md-top-50"><a class="btn button-primary" href="#">Оставить заявку</a></div>
            </div>
        </div>
    </section>

    {{-- ПОСЛЕДНИЕ НОВОСТИ - НАЧАЛО --}}
    <section class="section bg-catskill section-xl text-center">
        <div class="container">
            <h2 class="font-weight-bold">Последние новости</h2>
            <hr class="divider bg-madison">
            <div class="row row-30 offset-top-60 text-left justify-content-sm-center">
                <div class="col-md-6 col-lg-4">
                    <article class="post-news">
                        <a href="{{ url('news_post_page') }}">
                            <img class="img-responsive" src="images/blog/news-02-370x240.jpg" width="370" height="240" alt="">
                        </a>
                        <div class="post-news-body">
                            <h6><a href="{{ url('news_post_page') }}">10 юридических школ, куда поступают самые принимаемые студенты</a></h6>
                            <div class="offset-top-20">
                                <p>По последним данным осенью 2020 года в этих школах было зачислено не менее 42 процентов принятых студентов.</p>
                            </div>
                            <div class="post-news-meta offset-top-20">
                                <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                <span class="text-middle inset-left-10 font-italic text-black">2 дня назад</span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="post-news">
                        <a href="{{ url('news_post_page') }}">
                            <img class="img-responsive" src="images/blog/news-05-370x240.jpg" width="370" height="240" alt=""></a>
                        <div class="post-news-body">
                            <h6><a href="{{ url('news_post_page') }}">Рассмотрим программы MBA, которые предлагают летнюю подготовку</a></h6>
                            <div class="offset-top-20">
                                <p>Летние подготовительные программы, предлагаемые в школах, позволяют учащимся начать налаживать связи и развивать навыки.</p>
                            </div>
                            <div class="post-news-meta offset-top-20">
                                <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                <span class="text-middle inset-left-10 font-italic text-black">2 дня назад</span></div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="post-news">
                        <a href="{{ url('news_post_page') }}">
                            <img class="img-responsive" src="images/blog/news-03-370x240.jpg" width="370" height="240" alt="">
                        </a>
                        <div class="post-news-body">
                            <h6><a href="{{ url('news_post_page') }}">5 способов заплатить за общежитие</a></h6>
                            <div class="offset-top-20">
                                <p>Многие общественные колледжи предлагают программы обещаний, которые предлагают бесплатное обучение учащимся, имеющим на это право, в основном учащимся, имеющим право на получение гранта Пелла.</p>
                            </div>
                            <div class="post-news-meta offset-top-20">
                                <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                <span class="text-middle inset-left-10 font-italic text-black">3 дня назад</span></div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="offset-top-50">
                <a class="btn btn-icon btn-icon-right button-primary" href="{{ url('/news') }}">
                    <span class="icon fa fa-arrow-right"></span><span>смотреть полностью</span>
                </a></div>
        </div>
    </section>
    {{-- ПОСЛЕДНИЕ НОВОСТИ - КОНЕЦ --}}
@endsection
