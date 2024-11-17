<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Tunda pemuatan stylesheet non-kritis dengan media="print" -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"></noscript>

        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}"></noscript>

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"></noscript>

        <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick.css') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick.css') }}"></noscript>

        <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick-theme.css') }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick-theme.css') }}"></noscript>

        <!-- Tunda pemuatan JavaScript non-kritis -->
        <script src="{{ asset('assets/js/jquery.js') }}" defer></script>

        <title>{{ config('app.name') }}</title>
        @seoTags()
    </head>
    <body>

        @include("components.navbar")

        {{ $slot }}

        @include("toolbox")
        @yield("sub-footer")
        @include("components.footer")
        <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/js/script.min.js") }}"></script>
        <script src="{{ asset("assets/js/script.js") }}"></script>
        <script type="text/javascript" src="{{ asset("assets/slick-1.8.1/slick/slick.min.js") }}"></script>

    </body>
</html>
