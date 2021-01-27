@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')

<section class="section section-30 bg-default">
    <div class="container">
            <div class="carousel-parent calendar-carousel slick-slider text-center"
                 data-child="#child-calendar-carousel"
                 data-arrows="true"
                 data-for="#child-calendar-carousel"
                 data-loop="false" data-dots="false"
                 data-swipe="true" data-items="1"
                 data-slide-to-scroll="1">
                <div class="item">
                    <h2 class="font-weight-bold">Январь 2021</h2>
                </div>
                <div class="item">
                    <h2 class="font-weight-bold">Февраль 2021</h2>
                </div>
            </div>
            <!-- Slick Carousel-->
            <div class="hr divider bg-madison"></div>
            <div class="offset-top-60 slick-slider"
                 id="child-calendar-carousel"
                 data-arrows="false"
                 data-loop="false"
                 data-dots="false"
                 data-swipe="false"
                 data-items="1"
                 data-for=".carousel-parent" data-adaptiveheight="true">
            <div class="item">
                <div class="container container-wide">
                    <div class="row row-50 justify-content-sm-center justify-content-xxl-start">
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
                </div>
            </div>

                <div class="item">
                    <div class="container container-wide">
                        <div class="row row-50 justify-content-sm-center justify-content-xxl-start">
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
                    </div>
                </div>

            </div>
        </section>

</section>
    @endsection
