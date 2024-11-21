<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/webp" sizes="1131x1345" href="{{ asset('assets/img/Icon/Five%20Icon.webp') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick-theme.css') }}">

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <title>{{ config('app.name') }}</title>
    @seoTags()
</head>

<body>

    @include('components.navbar')

    {{ $slot }}

    @include('toolbox')
    @yield('sub-footer')
    @include('components.footer')
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/slick-1.8.1/slick/slick.min.js') }}"></script>

</body>

</html>
