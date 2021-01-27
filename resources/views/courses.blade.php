@extends('layouts.app')

@section('content')
    @include('layouts.breadcrumb')
    <section class="section section-30 bg-default">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-xl-8">
                    <!--Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!--Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-1-1" data-toggle="tab">Hard skills</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Soft Skills</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Еще одно правление</a></li>
                        </ul>
                        <!--Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tabs-1-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Hard skills. Наименование образовательной программы №1</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Hard skills. Наименование образовательной программы №2</a>
                                            </div>
                                        </div>
                                    </li>



                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Hard skills. Наименование образовательной программы №3</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Hard skills. Наименование образовательной программы №4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Soft skills. Наименование образовательной программы №1</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Soft skills. Наименование образовательной программы №2</a>
                                            </div>
                                        </div>
                                    </li>



                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Soft skills. Наименование образовательной программы №3</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Soft skills. Наименование образовательной программы №4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Еще одно направление. Наименование образовательной программы №1</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Еще одно направление. Наименование образовательной программы №2</a>
                                            </div>
                                        </div>
                                    </li>



                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Еще одно направление. Наименование образовательной программы №3</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <div class="d-flex save-link m-3">
                                            <i class="fa fa-arrow-right"></i>
                                            <div class="d-inline-block">
                                                <a href="{{ url('course_about') }}">Еще одно направление. Наименование образовательной программы №4</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
