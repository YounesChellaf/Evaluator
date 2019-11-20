@extends('layouts.master-auth')
@section('css')
    <link href="{{asset('assets/css/pages/login/login-6.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
        <div class="kt-login__wrapper">
            <div class="kt-login__container">
                <div class="kt-login__body">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="assets/media/company-logos/logo-2.png">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">S'identifier</h3>
                        </div>
                        <div class="kt-login__form">
                            <form class="kt-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                {{--<div class="form-group row">--}}
                                    {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                                        {{--@error('email')--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@enderror--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

                                        {{--@error('password')--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@enderror--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-last" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="kt-login__extra">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="kt_login_forgot">Mot de passe oublié ?</a>
                                    @endif
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">S'identifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
