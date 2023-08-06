@extends('layouts.app_login')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="{{ url('/') }}" class="h1">Por<b>Pro</b></a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Login</p>
        <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user mr-2"></i>Sign In</button>
            </div>
            </div>
        </form>

        <!-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div> -->

        <p class="mb-1">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('I forgot my password?') }}
                </a>
            @endif
        </p>
        <p class="mb-0">
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register a new membership') }}</a>
            @endif
        </p>
    </div>
</div>
@endsection
