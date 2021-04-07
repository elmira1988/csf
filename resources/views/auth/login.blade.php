@extends('layouts.app')
@section('content')
  {{--  @include('layouts.breadcrumb')--}}
    <section class="section section-sm bg-catskill">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" class="form-label form-label-outside rd-input-label">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-input form-control-has-validation form-control-last-child @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label form-label-outside rd-input-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-input form-control-has-validation form-control-last-child @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            <div class="text-right">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn button-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
    </section>
@endsection
