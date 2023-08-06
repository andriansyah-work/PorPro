<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PorPro') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{!! asset('assets/plugins/fontawesome-free/css/all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/dist/css/adminlte.min.css') !!}">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        @yield('content')
        
    </div>

    <script src="{!! asset('asset/plugins/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('asset/dist/js/adminlte.min.js') !!}"></script>
</body>
</html>
