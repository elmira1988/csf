@extends('layouts.app')
@section('content')
    @include('layouts.breadcrumb')
    <section class="section section-sm bg-catskill">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 offset-md-2 col-md-8 col-sm-12 col-xs-12" style="padding-top:5px;">
                    @csrf
                    <payment-component
                        url="{{ route('paymentLink') }}"
                        token='@csrf'
                    ></payment-component>
                </div>
        </div>
    </section>
@endsection
