<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - BEM IT Del</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('template/color/default.css') }}" rel="stylesheet" media="screen">
    <script src="{{ asset('template/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
@include('bem.sidebar')
@yield('content')
@include('bem.footer')