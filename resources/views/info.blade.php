@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')
    <section class="section section-30 bg-default">
        <div class="container">
            <div class="tabs-custom tabs-vertical tabs-line tabs-line-1" id="tabs-7">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#info_base" data-toggle="tab">Основные сведения</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#info_structure" data-toggle="tab">Структура и органы управления</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#info_docs" data-toggle="tab">Документы</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#edu" data-toggle="tab">Образование</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#edu_standart" data-toggle="tab">Образовательные стандарты</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#paid_services" data-toggle="tab">Платные образовательные услуги</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#leader_teacher" data-toggle="tab">Руководство. Педагогический (научно-педагогический) состав</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#material_security" data-toggle="tab">Материально-техническое обеспечение и оснащенность образовательного процесса</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#finance" data-toggle="tab">Финансово-хозяйственная деятельность</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#vacant" data-toggle="tab">Вакантные места для приема (перевода) обучающихся</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#accessible_environment" data-toggle="tab">Доступная среда</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#international_cooperation" data-toggle="tab">Международное сотрудничество</a></li>
                </ul>
                <!--Tab panes-->
                <div class="tab-content inset-lg-left-60">
                    <div class="tab-pane fade active show" id="info_base">
                        @include('info_basic')
                    </div>
                    <div class="tab-pane fade" id="info_structure">
                        @include('info_structure')
                    </div>
                    <div class="tab-pane fade" id="info_docs">
                        @include('info_docs')
                    </div>

                    <div class="tab-pane fade" id="edu">
                        @include('info_edu')
                    </div>

                    <div class="tab-pane fade" id="edu_standart">
                        <h3 class="font-weight-bold">Образовательные стандарты</h3>
                        <div class="hr divider bg-madison divider-md-0"></div>

                        <div class="offset-lg-top-30">
                            <p>К программам дополнительного профессионального образования и профессионального обучения образовательные стандарты не установлены. </p>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="paid_services">
                        @include('info_paid_services')
                    </div>

                    <div class="tab-pane fade" id="leader_teacher">
                        @include('info_leader_teacher')
                    </div>

                    <div class="tab-pane fade" id="material_security">
                        @include('info_material_security')
                    </div>

                    <div class="tab-pane fade" id="finance">
                        @include('info_finance')
                    </div>

                    <div class="tab-pane fade" id="vacant">
                        @include('info_vacant')
                    </div>

                    <div class="tab-pane fade" id="accessible_environment">
                        @include('info_accessible_environment')
                    </div>

                    <div class="tab-pane fade" id="international_cooperation">
                        @include('info_international_cooperation')
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
