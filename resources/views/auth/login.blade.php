@extends('layouts.master-auth')
@section('css')
    <link href="{{asset('assets/css/pages/login/login-6.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="kt-login__signin">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>S'identifier</h2>
                </div>
            </div>
        </div>
        <div class="kt-login__form col-md-6">
            <form class="kt-form" method="POST" action="{{ route('login') }}">
                @csrf
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
@endsection
