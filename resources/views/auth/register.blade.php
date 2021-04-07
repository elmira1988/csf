@extends('layouts.app')
@section('content')
    @include('layouts.breadcrumb')
    <section class="section section-sm bg-catskill">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                   {{-- <div class="card">--}}
                       {{-- <div class="card-header">{{ __('Register') }}</div>--}}

                       {{-- <div class="card-body">--}}
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group ">
                                    <label for="name" class="form-label form-label-outside rd-input-label">{{ __('Name') }}</label>

                                        <input id="name" type="text" class="form-input form-control-has-validation form-control-last-child @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="email" class="form-label form-label-outside rd-input-label">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="form-input form-control-has-validation form-control-last-child @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="password" class="form-label form-label-outside rd-input-label">{{ __('Password') }}</label>

                                        <input id="password" type="password" class="form-input form-control-has-validation form-control-last-child @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="password-confirm" class="form-label form-label-outside rd-input-label">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-input form-control-has-validation form-control-last-child" name="password_confirmation" required autocomplete="new-password">

                                </div>

                                <div class="offset-top-20 text-center text-md-right">
                                        <button type="submit" class="btn button-primary">
                                            {{ __('Register') }}
                                        </button>
                                </div>
                            </form>
                        {{--</div>--}}
                   {{-- </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
