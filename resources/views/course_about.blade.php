@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')
    <section class="section section-30 bg-default">
        <div class="container">
            <p class="text-left">Программа реализуется с целью обучения Слушателей технологиям ведения торговых операций в программе «1С: Управление торговлей».</p>

            <div class="bs-example pt-3" data-example-id="simple-jumbotron">
                <div class="jumbotron p-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left ">Направление</div>
                                <div class="text-right font-weight-bold">Наименование направления</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Вид программы</div>
                                <div class="text-right font-weight-bold">Повышение квалификации</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Форма обучения</div>
                                <div class="text-right font-weight-bold">заочная</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Срок обучения</div>
                                <div class="text-right font-weight-bold">4 недели</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Количество часов</div>
                                <div class="text-right font-weight-bold">108ч.</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Ближайшие наборы</div>
                                <div class="text-right font-weight-bold">20 марта 2021г.</div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">График занятий</div>
                                <div class="text-right font-weight-bold">пн, чт. с 18<sup>00</sup>-19<sup>00</sup></div>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <div class="text-left">Стоимость обучения</div>
                                <div class="text-right font-weight-bold">2500р.</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Описание</h6>
                <div class="text-subline"></div>
                <p>Эта программа для вас, если вам нужно:</p>

                <ul class="list-marked list offset-top-10">
                    <li>1С: Управление торговлейНаучиться настраивать программу перед началом работы и введением данных.</li>
                    <li>Освоить методы ведения учета в системе «1С: Управление торговлей».</li>
                    <li>Обучиться технологиям анализа финансовых результатов предприятия с помощью программы.</li>
                 </ul>

                <h6>Цели программы</h6>

                <p>Целью программы является формирование у Слушателей знаний и практических навыков по формированию личного бренда. Программа раскрывает следующие вопросы:</p>
                <ul class="list-marked list offset-top-10">
                    <li>понятие личного бренда;</li>
                    <li>стратегия развития личного бренда;</li>
                    <li>продвижение личного бренда в социальных сетях;</li>
                    <li>внешние атрибуты в личном бренде.</li>
                </ul>
                <h5>Что получит Слушатель?</h5>
                <p>По итогам обучения каждый Слушатель на примере заданий, кейсов или конкретной компании, получит следующие навыки и умения:</p>
                <ul class="list-marked list offset-top-10">
                    <li>
                        разработки стратегии развития личного бренда;
                    </li>
                    <li>
                        качественного использования внешних атрибутов в личном бренде;
                    </li>
                    <li>
                        продвижения личного бренда в социальных сетях.
                    </li>
                </ul>
                <p>По окончании курса Слушатели получат документ установленного образца, глубокие знания и набор компетенций для формирования сильного личного бренда, позволяющего стать конкурентоспособнее в своей нише.</p>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Требования к слушателям</h6>
                <div class="text-subline"></div>
                <p>
                    Для поступления гражданам Российской Федерации вместе с заявлением необходимо предоставить:
                </p>
                <ol class="list list-ordered text-left">
                    <li>
                        Диплом о высшем образовании (диплом бакалавра, специалиста, магистра) или диплом о среднем профессиональном образовании.
                    </li>

                    <li>
                        Документ, удостоверяющий личность и гражданство.
                    </li>

                    <li>
                        Страховой номер индивидуального лицевого счёта (СНИЛС).
                    </li>

                    <li>
                        Справку с места учёбы для студентов, проходящих обучение в заведениях высшего и среднего профессионального образования (при необходимости).
                    </li>

                    <li>
                        Свидетельства об изменении фамилии, имени, отчества (при необходимости).
                    </li>
                </ol>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Преподаватели</h6>
                <div class="text-subline"></div>
                <div class="row row-10 offset-top-20">
                    <div class="col-md-12">
                        <div class="row row-30 text-lg-left">
                            <div class="col-md-6 col-lg-3">
                                <img class="img-responsive d-inline-block img-rounded" src="images/users/user-kathy.jpg" width="270" height="270" alt="">
                                <div class="offset-top-20">
                                    <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Климова Екатерина Петровна</a></h6>
                                </div>
                                <div class="offset-top-5">
                                    <p>Психолог</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <img class="img-responsive d-inline-block img-rounded" src="images/users/julie-weaver.jpg" width="270" height="270" alt="">
                                <div class="offset-top-20">
                                    <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Хасанова Вероника Валерьевна</a></h6>
                                </div>
                                <div class="offset-top-5">
                                    <p>Экономист</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <img class="img-responsive d-inline-block img-rounded" src="images/users/peter.jpg" width="270" height="270" alt="">
                                <div class="offset-top-20">
                                    <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Петров Юрий Владимирович</a></h6>
                                </div>
                                <div class="offset-top-5">
                                    <p>Геолог</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <img class="img-responsive d-inline-block img-rounded" src="images/users/russell.jpg" width="270" height="270" alt="">
                                <div class="offset-top-20">
                                    <h6 class="font-weight-bold text-primary"><a href="team-member-profile.html">Дмитриев Петр Сергеевич</a></h6>
                                </div>
                                <div class="offset-top-5">
                                    <p>Дизайнер</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Учебный план</h6>
                <div class="text-subline"></div>

                <table class="table table-custom striped-table stacktable large-only offset-top-20" data-responsive="true">
                    <tbody>
                    <tr>
                        <th>
                            <p >№</p>
                        </th>
                        <th>
                            <p >Наименование модулей и тем</p>
                        </th>
                        <th>
                            <p >Часы</p>
                        </th>
                        <th>
                            <p >Лекции</p>
                        </th>
                        <th>
                            <p >Практика и тестир-ие</p>
                        </th>
                        <th>
                            <p >Формы аттестации (ДЗ, З)</p>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p ><b>Модуль I. Основные правила работы с   системой «1С: Управление торговлей»</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >1.</p>
                        </td>
                        <td>
                            <p>Первоначальные настройки программы   «1С: Управление торговлей»</p>
                        </td>
                        <td>
                            <p >12</p>
                        </td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >8</p>
                        </td>
                        <td >
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >2.</p>
                        </td>
                        <td>
                            <p>Простейшие операции при работе с   формами в «1С: Управление торговлей»</p>
                        </td>
                        <td>
                            <p >12</p>
                        </td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >8</p>
                        </td>
                        <td> <p >З</p></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p ><b>Модуль II. Ведение учета с   использованием системы «1С: Управление торговлей»</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >3.</p>
                        </td>
                        <td>
                            <p>Управление закупочной деятельностью   предприятия</p>
                        </td>
                        <td>
                            <p >14</p>
                        </td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >10</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >4.</p>
                        </td>
                        <td>
                            <p>Оформление продаж</p>
                        </td>
                        <td>
                            <p >14</p>
                        </td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >10</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >5.</p>
                        </td>
                        <td>
                            <p>Управление процессом размещения и   отгрузки товаров на складах предприятия</p>
                        </td>
                        <td><p>14</p></td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >10</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >6.</p>
                        </td>
                        <td>
                            <p>Управление денежными средствами   предприятия</p>
                        </td>
                        <td>
                            <p >14</p>
                        </td>
                        <td>
                            <p >4</p>
                        </td>
                        <td>
                            <p >10</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p ><b>Модуль III. Формирование отчетности   в системе</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >7.</p>
                        </td>
                        <td>
                            <p>Формирование произвольных отчетов</p>
                        </td>
                        <td>
                            <p >10</p>
                        </td>
                        <td>
                            <p >2</p>
                        </td>
                        <td>
                            <p >8</p>
                        </td>
                        <td >
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >8.</p>
                        </td>
                        <td>
                            <p>Формирование отчетов по CRM и   маркетингу</p>
                        </td>
                        <td>
                            <p >8</p>
                        </td>
                        <td>
                            <p >2</p>
                        </td>
                        <td>
                            <p >6</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p >9.</p>
                        </td>
                        <td>
                            <p>Анализ финансовых результатов   предприятия</p>
                        </td>
                        <td>
                            <p >8</p>
                        </td>
                        <td>
                            <p >2</p>
                        </td>
                        <td>
                            <p >6</p>
                        </td>
                        <td>
                            <p >З</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p >Итоговая аттестация</p>
                        </td>
                        <td colspan="3">
                            <p >2</p>
                        </td>
                        <td>
                            <p >Итоговое тестирование</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <p align="right"><b>ИТОГО</b></p>
                        </td>
                        <td colspan="4">
                            <p ><b>108ч</b></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Диплом</h6>
                <div class="text-subline"></div>
                <p>По завершению обучения обучающиеся получат диплом такого образца</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div data-lightgallery="item" class="offset-top-20">
                            <figure class="thumbnail-classic">
                                <div class="thumbnail-classic-img-wrap">
                                    <img src="images/samples_of_doc/diplom.jpg" alt="">
                                </div>
                                <figcaption class="thumbnail-classic-caption text-center">
                                    <div>
                                        <h4 class="thumbnail-classic-title">Образец диплома</h4>
                                    </div>
                                    <hr class="divider divider-sm">
                                    <p>По завершению обучения обучающиеся получат диплом такого образца</p>
                                    <a class="thumbnail-classic-link icon icon-xxs fa fa-search-plus" href="images/samples_of_doc/diplom.jpg" data-lightgallery="item">
                                        <img src="images/samples_of_doc/diplom.jpg" alt="" width="370" height="370"></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offset-top-30 text-left">
                <h6 class="font-weight-bold">Оставить заявку</h6>
                <div class="text-subline"></div>
                <p>Вы можете связаться с нами любым удобным для вас способом. Мы доступны 24/7 по электронной почте.
                    Вы также можете использовать форму быстрой связи.</p>
                    <p>Мы будем рады ответить на ваши вопросы.</p>

                <div class="offset-md-top-50 offset-top-40">
                    <form class="text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="" novalidate="novalidate">
                        <div class="row row-12">
                            <div class="col-xl-6">
                                <div class="form-wrap">
                                    <label class="form-label form-label-outside " for="contact-us-first-name">Имя</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="contact-us-first-name" type="text" name="first-name" data-constraints="@Required"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-wrap">
                                    <label class="form-label form-label-outside " for="contact-us-last-name">Фамилия</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="contact-us-last-name" type="text" name="last-name" data-constraints="@Required"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-wrap">
                                    <label class="form-label form-label-outside " for="contact-us-email">E-mail</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-wrap">
                                    <label class="form-label form-label-outside " for="contact-us-phone">Телефон</label>
                                    <input class="form-input form-control-has-validation form-control-last-child" id="contact-us-phone" type="text" name="phone" data-constraints="@IsNumeric"><span class="form-validation"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label form-label-outside " for="contact-us-message">Сообщение/вопрос</label>
                                    <textarea class="form-input form-control-has-validation form-control-last-child" id="contact-us-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-20 text-center text-md-left">
                            <button class="btn button-primary" type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </section>

@endsection
