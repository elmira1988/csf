@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')

<section class="section section-xl bg-catskill">
    <div class="container">
        <div class="row row-85 justify-content-sm-center">
            <div class="col-lg-8">
                <div class="row row-30 text-md-left justify-content-sm-center">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <article class="post-news">
                            <a href="{{ url('news_post_page') }}">
                                <img class="img-responsive" src="images/blog/news-04-370x240.jpg" width="370" height="240" alt="">
                            </a>
                            <div class="post-news-body">
                                <h6>
                                    <a href="{{ url('news_post_page') }}">Как родители и консультанты могут помочь студентам получить стипендии</a></h6>
                                <div class="offset-top-20">
                                    <p>Получение стипендии может вызывать стресс, но родители и консультанты могут послужить источником информации.</p>
                                </div>
                                <div class="post-news-meta offset-top-20">
                                    <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                    <span class="text-middle inset-left-10 font-italic text-black">2 дня назад</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
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
                                    <span class="text-middle inset-left-10 font-italic text-black">2 дня назад</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
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
                <div class="offset-top-60 text-lg-left">
                    <!--Bootstrap Pagination-->
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-custom">
                            <li class="page-item page-item-control disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span class="icon fa fa-chevron-left" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-item-control">
                                <a class="page-link" aria-label="Next">
                                    <span class="icon fa fa-chevron-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- aside-->
            <div class="col-lg-4 text-left col-sm-8">
                <aside class="inset-lg-left-30">
                    <h6 class="font-weight-bold">Поиск</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                        <!-- RD Search Form-->
                        <form class="form-search rd-search form-search-widget rd-form-inline rd-form-inline-custom" action="search-results.html" method="GET">
                            <div class="form-wrap">
                                <div class="input-group">
                                    <input class="form-search-input  form-input" type="text" name="s" autocomplete="off"><span class="input-group-btn">
                                          <button class="btn button-primary" type="submit"><span class="icon fa fa-search"></span></button></span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="offset-top-60">
                        <!-- Archive-->
                        <h6 class="font-weight-bold">Архив</h6>
                        <div class="text-subline"></div>
                        <div class="row row-30 offset-top-20">
                            <div class="col-6">
                                <ul class="list list-marked list-marked-primary">
                                    <li><a href="">июль 2020</a></li>
                                    <li><a href="">август 2020</a></li>
                                    <li><a href="">сентябрь 2020</a></li>
                                    <li><a href="">октябрь 2020</a></li>
                                    <li><a href="">ноябрь 2020</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list list-marked list-marked-primary">
                                    <li><a href="">декабрь 2020</a></li>
                                    <li><a href="">январь 2021</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

    @endsection
