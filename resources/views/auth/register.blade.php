@extends('layouts.app_register')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="{{ url('/') }}" class="h1">Por<b>Pro</b></a>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Register</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group mb-3">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-7">
                <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user mr-2"></i>Register</button>
            </div>
            <!-- /.col -->
            </div>
        </form>

        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
</div>
@endsection
