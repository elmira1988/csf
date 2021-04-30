<h3 class="font-weight-bold">Основные сведения</h3>
<div class="hr divider bg-madison divider-md-0"></div>

<div class="offset-top-30">
    <h6 class="font-weight-bold">Полное/сокращенное наименование</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <ul class="list list-unstyled list-marked">
                <li>{{ \App\Center::first()->full_name }}</li>
                <li>{{ \App\Center::first()->name }}</li>
            </ul>
        </div>
    </div>
</div>

<div class="offset-top-30">
    <h6 class="font-weight-bold">Дата создания</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <p>{{ \Carbon\Carbon::parse(\App\Center::first()->date_of_creation)->format('d.m.Y') }}</p>
        </div>
    </div>
</div>

<div class="offset-top-30">
    <h6 class="font-weight-bold">Учредитель</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <p>{!! \App\Center::first()->founder !!} </p>
        </div>
    </div>
</div>

{{--<div class="offset-top-30">
    <h6 class="font-weight-bold">Представительства и филиалы</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <p>Представительства и филиалы</p>
        </div>
    </div>
</div>--}}

<div class="offset-top-30">
    <h6 class="font-weight-bold">Местонахождение</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <div class="unit flex-row align-items-center unit-spacing-xs">
                <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                <div class="unit-body text-left">
                    <a class="text-dark" href="#">
                        {{ \App\Address::first()->index }}, РБ, {{ \App\Address::first()->city }}, {{ \App\Address::first()->street }}, {{ \App\Address::first()->house }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offset-top-30">
    <h6 class="font-weight-bold">Режим и график работы</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <p>Режим и график работы</p>
        </div>
    </div>
</div>

<div class="offset-top-30">
    <h6 class="font-weight-bold">Контакты/сайты/страницы в сети "Интернет"</h6>
    <div class="text-subline"></div>

    <div class="row row-10 offset-top-20">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="unit flex-row align-items-center unit-spacing-xs">
                <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                <div class="unit-body"><a class="text-dark" href="tel:#">{{ \App\Address::first()->phone }}</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="unit flex-row align-items-center unit-spacing-xs">
                <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                <div class="unit-body"><a href="mailto:#">{{ \App\Address::first()->email }}</a></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="unit flex-row align-items-center unit-spacing-xs">
                <div class="unit-left">
                    <a href="#" class="icon mdi mdi-facebook-box text-middle icon-xs text-madison"></a>
                </div>
                <div class="unit-left">
                    <a href="#" class="icon mdi mdi-vk-box text-middle icon-xs text-madison"></a>
                </div>
                <div class="unit-body"></div>
            </div>
        </div>
    </div>
</div>


<div class="offset-top-30">
    <h6 class="font-weight-bold">Места осуществления образовательной деятельности</h6>
    <div class="text-subline"></div>
    <div class="row row-10 offset-top-20">
        <div class="col-md-12">
            <div class="unit flex-row align-items-center unit-spacing-xs">
                <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                <div class="unit-body text-left">
                    <a class="text-dark" href="#">
                        {{ \App\Address::first()->index }}, РБ, {{ \App\Address::first()->city }}, {{ \App\Address::first()->street }}, {{ \App\Address::first()->house }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
