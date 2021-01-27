@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')
<section id="contact_now" class="section section-xl bg-catskill">
    <div class="container">
        <div class="row row-85 justify-content-sm-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact_details text-center">
                    <i class="fa fa-envelope-o"></i>
                    <div class="contact-text">
                        <h5>E-MAIL</h5>
                        <span>info@csf-str.ru</span>
                        <span> &nbsp; </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact_details text-center">
                    <i class="fa fa-phone"></i>
                    <div class="contact-text">
                        <h5>ТЕЛЕФОН</h5>
                        <span> 8(3473) 21-23-69 </span>
                        <span> &nbsp; </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact_details text-center">
                    <i class="fa fa-map-o"></i>
                    <div class="contact-text">
                        <h5>АДРЕС</h5>
                        <span>453100, РБ, г. Стерлитамак, </span>
                        <span>пр. Ленина, 49 </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="offset-top-30 text-left">
            <h6 class="font-weight-bold">Напишите нам</h6>
            <div class="text-subline"></div>
            <p>Вы можете связаться с нами любым удобным для вас способом. Мы доступны 24/7 по электронной почте.
                Вы также можете использовать форму быстрой связи.</p>
            <p>Мы будем рады ответить на ваши вопросы.</p>
            <div class="offset-md-top-50 offset-top-40">
                <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" novalidate="novalidate" class="rd-mailform text-left">
                    <div class="row row-12">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-wrap">
                                <label for="contact-us-first-name" class="form-label form-label-outside rd-input-label">Имя</label>
                                <input id="contact-us-first-name" type="text" name="first-name" data-constraints="@Required" class="form-input form-control-has-validation form-control-last-child">
                                <span class="form-validation"></span>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form-wrap">
                                <label for="contact-us-email" class="form-label form-label-outside rd-input-label">E-mail</label>
                                <input id="contact-us-email" type="email" name="email" data-constraints="@Required  @Email" class="form-input form-control-has-validation form-control-last-child">
                                <span class="form-validation"></span>
                                <span class="form-validation"></span>
                            </div>
                            <div class="form-wrap">
                                <label for="contact-us-phone" class="form-label form-label-outside rd-input-label">Телефон</label>
                                <input id="contact-us-phone" type="text" name="phone" data-constraints="@IsNumeric" class="form-input form-control-has-validation form-control-last-child">
                                <span class="form-validation"></span>
                                <span class="form-validation"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-wrap">
                                <label for="contact-us-message" class="form-label form-label-outside rd-input-label">Сообщение/вопрос</label>
                                <textarea id="contact-us-message" rows="8" style="height: 200px!important" name="message" data-constraints="@Required" class="form-input form-control-has-validation form-control-last-child"></textarea>
                                <span class="form-validation"></span>
                                <span class="form-validation"></span>
                            </div>
                        </div>
                    </div>
                    <div class="offset-top-20 text-center text-md-right">
                        <button type="submit" class="btn button-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
