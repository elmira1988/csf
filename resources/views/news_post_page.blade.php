@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')

    <section class="section section-xl bg-catskill">
        <div class="container">
            <div class="row row-85 justify-content-sm-center">
                <div class="col-lg-8">
                    <h2 class="font-weight-bold">Как провести каникулы с пользой</h2>
                    <hr class="divider bg-madison divider-lg-0">
                    <div class="offset-lg-top-47 offset-top-20">
                        <ul class="post-news-meta list list-inline list-inline-xl">
                            <li>
                                <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span>
                                <span class="text-middle inset-left-10 font-italic text-black">2 дня назад</span></li>
                            </ul>
                    </div>
                    <div class="offset-top-30 text-justify">
                        <img class="img-responsive" src="images/blog/news-03-770x500.jpg" width="770" height="500" alt="">
                        <p>Зимние (как, впрочем, и любые другие) каникулы каждый школьник ждет с нетерпением. Не надо рано вставать, делать бесконечную домашнюю работу и заучивать параграфы учебников. Отдых, конечно, это очень хорошо, но десять дней — огромный срок, за который можно потерять не только рабочий настрой, но и с легкостью позабыть то, что уже было пройдено. Стоит ли заставлять ребенка учиться или дать ему спокойно отдохнуть? Об этом рассуждает основатель учебного центра MAXIMUM Михаил Мягков.</p>
                        <p>На каникулах, безусловно, следует отдохнуть, просто не нужно с этим затягивать. Большинство психологов утверждают, что достаточно трех дней, чтобы привести организм в норму и вернуть себе свежий вид. Поэтому на несколько дней оставьте ребенка в покое: пусть спит, играет в приставку, общается с друзьями, катается на коньках. В общем, делает все то, на что в учебное время, как правило, не хватает времени.</p>
                        <p>А вот по истечении этих трех дней можно уже задуматься о том, как накопившуюся энергию правильно распределить. И первое, о чем стоит задуматься — это степень интенсивности каникулярного учебного процесса. Она должна быть максимально комфортной для вашего ребенка. То, как будет проходить обучение на каникулах, должно отличаться оттого, что он делает в обычный учебный день. Во-вторых, необходимо понять, а что именно ребенок должен подтянуть, повторить или узнать. И уже исходя из этих двух факторов можно определить, какую учебную активность предложить ребенку. Главное здесь именно предложить и заинтересовать, а не в утвердительном формате заставить делать то, что показалось интересным вам.</p>
                        <p>Права на материалы с сайта mel.fm принадлежат ООО «МЕЛ» (ОГРН: 1157746946686). Полное или частичное воспроизведение материалов возможно только по письменному разрешению правообладателя.</div></p>
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
                                        <li><a href="news-post-page.html">июль 2020</a></li>
                                        <li><a href="news-post-page.html">август 2020</a></li>
                                        <li><a href="news-post-page.html">сентябрь 2020</a></li>
                                        <li><a href="news-post-page.html">октябрь 2020</a></li>
                                        <li><a href="news-post-page.html">ноябрь 2020</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list list-marked list-marked-primary">
                                        <li><a href="news-post-page.html">декабрь 2020</a></li>
                                        <li><a href="news-post-page.html">январь 2021</a></li>
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
