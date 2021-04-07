@extends('layouts.app')
@section('content')
    <section class="section section-sm bg-catskill">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="offset-top-30 text-left">
                        <h6 class="font-weight-bold">Вы вошли в систему! </h6> <div class="text-subline"></div>
                    </div>
                    <p>Поздравляем! Вы успешно вошли в систему!</p>
                </div>
    </section>
@endsection
