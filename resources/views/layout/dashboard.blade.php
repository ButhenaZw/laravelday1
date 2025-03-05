<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">

</head>
<body>
    @include('layout.nav')
    @include('layout.header')
    @include('layout.body')
    @yield('content')
    @include('layout.sidenav')


@include('layout.script')
</body>
</html>