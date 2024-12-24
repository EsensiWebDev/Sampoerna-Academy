<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/webp" sizes="1131x1345" href="{{ asset('assets/img/Icon/Five%20Icon.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick.css') }}" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('assets/slick-1.8.1/slick/slick-theme.css') }}" media="print"
        onload="this.media='all'">
    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <title>{{ config('app.name') }}</title>
    @seoTags()
</head>

<body>

    @include('components.navbar')


    <section id="home">
        @include('components.main-carousel')
        <section style="margin-top: 200px;" id="section-target">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
                        <div class="background-container">
                            <div class="d-flex flex-column sub-head align-items-start">
                                <h1 class="fs-2 fw-semibold"
                                    style="color: var(--bs-body-bg); font-family: Campton; margin-bottom: 8px;">
                                    {{ __('How We IGNITE the Curiosity?') }}
                                </h1>

                                <p class="toggle-text" style="font-family: Campton; font-size: 22px; color: white;">
                                    {{ __('At Sampoerna Academy, we believe that curiosity is the spark that fuels innovation and lifelong learning. Through a dynamic blend of internationally acclaimed curriculum and STEAM programs, we foster curiosity, critical thinking, and creativity. With our unique approach, we empower students to become the innovators of tomorrow.') }}
                                </p>

                                <button class="btn more-info"
                                    style="color: var(--bs-body-bg); font-family: Campton; padding:0px;">
                                    {{ __('More Info') }}&nbsp;
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L13.7071 14.7071C13.3166 15.0976 12.6834 15.0976 12.2929 14.7071C11.9024 14.3166 11.9024 13.6834 12.2929 13.2929L14.5858 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>

                                <script>
                                    $(document).ready(function() {
                                        $('.more-info').on('click', function() {
                                            window.location.href = '/aboutus/ourapproach';
                                        });
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 200px;">
            <div class="container">
                <div class="row" style="padding-bottom: 0px;margin-bottom: 48px;">
                    <div class="col-md-12">
                        <h1 class="fs-2 fw-semibold text-center" style="color: var(--bs-black);font-family: Campton;">
                            {{ __('A Journey of Lifelong Learning') }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
                        <div class="card" style="border-radius: 0px;border-style: none;"><img
                                class="card-img w-100 d-block" loading="lazy" width="380" height="500"
                                style="border-radius: 0px;" src="assets/img/Card/Rectangle%209036.webp">
                            <div class="card-img-overlay d-flex flex-column justify-content-end justify-content-sm-end justify-content-lg-end align-items-lg-start"
                                style="border-radius: 0px;background: linear-gradient(rgba(255,255,255,0) 0%, rgba(0,0,0,0.3) 80%);border-style: none;">
                                <div class="d-flex flex-row flex-md-column justify-content-between">
                                    <h4 class="fs-5" style="font-family: Campton;color: var(--bs-body-bg);">
                                        {{ __('Early Years') }}</h4>
                                    <a href="/academics/early-years"
                                        style="color: var(--bs-body-bg);font-family: Campton;">{{ __('More Info') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
                        <div class="card" style="border-radius: 0px;border-style: none;"><img
                                class="card-img w-100 d-block" loading="lazy" width="380" height="500"
                                style="border-radius: 0px;" src="assets/img/Card/Rectangle%209036%20(1).webp">
                            <div class="card-img-overlay d-flex flex-column justify-content-end justify-content-sm-end justify-content-lg-end align-items-lg-start"
                                style="border-radius: 0px;background: linear-gradient(rgba(255,255,255,0) 0%, rgba(0,0,0,0.3) 80%);border-style: none;">
                                <div class="d-flex flex-row flex-md-column justify-content-between">
                                    <h4 class="fs-5" style="font-family: Campton;color: var(--bs-body-bg);">
                                        {{ __('Elementary School') }}</h4>
                                    <a href="/academics/elementary-school"
                                        style="color: var(--bs-body-bg);font-family: Campton;">{{ __('More Info') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
                        <div class="card" style="border-radius: 0px;border-style: none;"><img
                                class="card-img w-100 d-block" loading="lazy" width="380" height="500"
                                style="border-radius: 0px;" src="assets/img/Card/Rectangle%209036%20(2).webp">
                            <div class="card-img-overlay d-flex flex-column justify-content-end justify-content-lg-end align-items-lg-start"
                                style="border-radius: 0px;background: linear-gradient(rgba(255,255,255,0) 0%, rgba(0,0,0,0.3) 80%);border-style: none;">
                                <div class="d-flex flex-row flex-md-column justify-content-between">
                                    <h4 class="fs-5" style="font-family: Campton;color: var(--bs-body-bg);">
                                        {{ __('Middle School') }}</h4>
                                    <a href="/academics/middle-school"
                                        style="color: var(--bs-body-bg);font-family: Campton;">{{ __('More Info') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;">
                        <div class="card" style="border-radius: 0px;border-style: none;"><img
                                class="card-img w-100 d-block" loading="lazy" width="380" height="500"
                                style="border-radius: 0px;" src="assets/img/Card/Rectangle%209036%20(3).webp">
                            <div class="card-img-overlay d-flex flex-column justify-content-end justify-content-lg-end align-items-lg-start"
                                style="border-radius: 0px;background: linear-gradient(rgba(255,255,255,0) 0%, rgba(0,0,0,0.3) 80%);border-style: none;">
                                <div class="d-flex flex-row flex-md-column justify-content-between">
                                    <h4 class="fs-5" style="font-family: Campton;color: var(--bs-body-bg);">
                                        {{ __('High School') }}</h4>
                                    <a href="/academics/high-school"
                                        style="color: var(--bs-body-bg);font-family: Campton;">{{ __('More Info') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 20 20" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-9">
                        <div>
                            <h1 class="display-4 fw-semibold"
                                style="color: var(--bs-emphasis-color);font-family: Campton;margin-bottom: 24px;">
                                <span><img class="img-fluid" width="166" height="60"
                                        src="assets/img/Logo/STEAM%20LOGO%201.webp"
                                        style="width: 166px;"></span>&nbsp;{{ __('Powered Curriculum') }}
                            </h1>
                            <p>{{ __('The STEAM education model at Sampoerna Academy is an instructional approach') }}
                                <br>{{ __('that emphasizes collaboration and personalized learning. Through STEAM learning,') }}
                                <br>{{ __('student groups engage in a meaningful inquiry that aligns with their personal') }}
                                <br>{{ __('interests') }}.
                            </p>
                        </div>
                    </div>
                    <div
                        class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-lg-end align-items-lg-center justify-content-xl-end align-items-xl-center justify-content-xxl-end align-items-xxl-center">
                        <div class="d-lg-flex justify-content-lg-end">
                            <a href="/steam">
                                <button class="btn btn-primary" type="button"
                                    style="border-style: none;border-radius: 12px;padding-left: 40px;padding-right: 40px;padding-top: 20px;padding-bottom: 20px;font-family: Campton;">{{ __('More Info') }}
                                    &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 200px;">
            <div class="container">
                <div class="row" style="margin-bottom: 48px;">
                    <div class="col-md-12">
                        <h1 class="fs-2 fw-semibold text-center"
                            style="font-family: Campton;color: var(--bs-emphasis-color);">
                            {{ __('Instagram Content') }}</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                        <iframe src="https://cdn.bootstrapstudio.io/placeholders/instagram.html"
                            allowtransparency="true" frameborder="0" scrolling="no" width="320"
                            height="550"></iframe>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                        <iframe src="https://cdn.bootstrapstudio.io/placeholders/instagram.html"
                            allowtransparency="true" frameborder="0" scrolling="no" width="320"
                            height="550"></iframe>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                        <iframe src="https://cdn.bootstrapstudio.io/placeholders/instagram.html"
                            allowtransparency="true" frameborder="0" scrolling="no" width="320"
                            height="550"></iframe>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                        <iframe src="https://cdn.bootstrapstudio.io/placeholders/instagram.html"
                            allowtransparency="true" frameborder="0" scrolling="no" width="320"
                            height="550"></iframe>
                    </div>
                </div>
            </div>
        </section>
        
        <section style="margin-top: 200px;" class="d-none d-md-block">
            <div class="container">
                <div class="row" style="margin-bottom: 48px;">
                    <div class="col-md-12">
                        <h1 class="fs-2 fw-semibold text-center"
                            style="font-family: Campton;color: var(--bs-emphasis-color);">
                            {{ __('Awards & Achievements') }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="border-style: none;border-radius: 0px;"><img width="358"
                                height="358" class="card-img-top w-100 d-block" src="assets/img/Card/Cover.webp"
                                style="border-radius: 0px;">
                            <div class="card-body"
                                style="padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-top: 32px;">
                                <h4 class="fs-5 fw-semibold card-title"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">
                                    Claire
                                    Nicole Lin</h4>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: #292F78;">{{ __('Grade 7') }}
                                    <br>{{ __('Sampoerna Academy Online') }}
                                </h1>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);padding-top: 0px;margin-top: 24px;padding-bottom: 0px;">
                                    {{ __('First Place') }}</h1>
                                <p class="fw-light card-text" style="font-family: Campton;">
                                    {{ _('The 3rd Tokyo International Youth Piano Competition Final Round') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-style: none;border-radius: 0px;"><img width="358"
                                height="358" class="card-img-top w-100 d-block"
                                src="assets/img/Card/WhatsApp%20Image%202024-07-03%20at%2015.14.25.webp"
                                style="border-radius: 0px;">
                            <div class="card-body"
                                style="padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-top: 32px;">
                                <h4 class="fs-5 fw-semibold card-title"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">
                                    Alaric
                                    Wongso</h4>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: #292F78;">{{ __('Grade 4') }}
                                    <br>{{ __('Sampoerna Academy Medan') }}
                                </h1>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);padding-top: 0px;margin-top: 24px;padding-bottom: 0px;">
                                    {{ __('First Place') }}</h1>
                                <p class="fw-light card-text" style="font-family: Campton;">
                                    {{ __('Indonesia Junior Golf Premier league 5') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-style: none;border-radius: 0px;"><img
                                class="card-img-top w-100 d-block" width="358" height="358"
                                src="assets/img/Card/7C7877D0-E285-49C8-A926-D5FA84D2C3BA.webp"
                                style="border-radius: 0px;">
                            <div class="card-body"
                                style="padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-top: 32px;">
                                <h4 class="fs-5 fw-semibold card-title"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">
                                    Rayya
                                    Amerta Putri</h4>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: #292F78;">{{ __('Grade 2') }}
                                    <br>{{ __('Sampoerna Academy Pakuwon Indah') }}
                                </h1>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);padding-top: 0px;margin-top: 24px;padding-bottom: 0px;">
                                    {{ __('Bronze Medal') }}</h1>
                                <p class="fw-light card-text" style="font-family: Campton;">
                                    {{ __('International Singapore Mathematics Competition 2024') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="border-style: none;border-radius: 0px;"><img width="358"
                                height="358" class="card-img-top w-100 d-block"
                                src="assets/img/Card/38BD808C-FDE3-4A8C-9246-D3DC0E1B59F1.webp"
                                style="border-radius: 0px;">
                            <div class="card-body"
                                style="padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-top: 32px;">
                                <h4 class="fs-5 fw-semibold card-title"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">
                                    Rayya
                                    Amerta Putri</h4>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: #292F78;">{{ __('Grade 2') }}
                                    <br>{{ __('Sampoerna Academy Pakuwon Indah') }}
                                </h1>
                                <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                    style="font-family: Campton;color: var(--bs-emphasis-color);padding-top: 0px;margin-top: 24px;padding-bottom: 0px;">
                                    {{ __('Honour Mention') }}</h1>
                                <p class="fw-light card-text" style="font-family: Campton;">
                                    {{ __('The 2024-2025 Third SIAT International Youth Art Competition') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="margin-top: 200px; overflow-x: hidden;" class="d-sm-block d-md-none">
            <!-- Added overflow-x -->
            <div class="container-fluid"> <!-- Changed to container-fluid for full-width responsiveness -->
                <div class="text-center mb-4">
                    <h1 class="fs-2 fw-semibold" style="font-family: Campton; color: var(--bs-emphasis-color);">
                        {{ __('Awards & Achievements') }}</h1>
                </div>

                <div class="awards-slider">
                    <!-- Award Item 1 -->
                    <div class="slick-item" style="border-style: none; border-radius: 0px;">
                        <img class="card-img-top w-100 d-block" src="assets/img/Card/Cover.webp"
                            style="border-radius: 0px;">
                        <div class="card-body" style="padding: 0;">
                            <h4 class="fs-5 fw-semibold card-title"
                                style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">
                                Claire Nicole Lin</h4>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: #292F78;">
                                {{ __('Grade 7') }}<br>{{ __('Sampoerna Academy Online') }}</h1>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: var(--bs-emphasis-color); padding-top: 0; margin-top: 24px;">
                                {{ __('First Place') }}</h1>
                            <p class="fw-light card-text" style="font-family: Campton;">
                                {{ _('The 3rd Tokyo International Youth Piano Competition Final Round') }}</p>
                        </div>
                    </div>

                    <!-- Award Item 2 -->
                    <div class="slick-item" style="border-style: none; border-radius: 0px;">
                        <img class="card-img-top w-100 d-block"
                            src="assets/img/Card/WhatsApp%20Image%202024-07-03%20at%2015.14.25.webp"
                            style="border-radius: 0px;">
                        <div class="card-body" style="padding: 0;">
                            <h4 class="fs-5 fw-semibold card-title"
                                style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">
                                Alaric Wongso</h4>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: #292F78;">
                                {{ __('Grade 4') }}<br>{{ __('Sampoerna Academy Medan') }}</h1>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: var(--bs-emphasis-color); padding-top: 0; margin-top: 24px;">
                                {{ __('First Place') }}</h1>
                            <p class="fw-light card-text" style="font-family: Campton;">
                                {{ __('Indonesia Junior Golf Premier league 5') }}</p>
                        </div>
                    </div>

                    <!-- Award Item 3 -->
                    <div class="slick-item" style="border-style: none; border-radius: 0px;">
                        <img class="card-img-top w-100 d-block"
                            src="assets/img/Card/7C7877D0-E285-49C8-A926-D5FA84D2C3BA.webp"
                            style="border-radius: 0px;">
                        <div class="card-body" style="padding: 0;">
                            <h4 class="fs-5 fw-semibold card-title"
                                style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">
                                Rayya Amerta Putri</h4>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: #292F78;">
                                {{ __('Grade 2') }}<br>{{ __('Sampoerna Academy Pakuwon Indah') }}</h1>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: var(--bs-emphasis-color); padding-top: 0; margin-top: 24px;">
                                {{ __('Bronze Medal') }}</h1>
                            <p class="fw-light card-text" style="font-family: Campton;">
                                {{ __('International Singapore Mathematics Competition 2024') }}</p>
                        </div>
                    </div>

                    <!-- Award Item 4 -->
                    <div class="slick-item" style="border-style: none; border-radius: 0px;">
                        <img class="card-img-top w-100 d-block"
                            src="assets/img/Card/38BD808C-FDE3-4A8C-9246-D3DC0E1B59F1.webp"
                            style="border-radius: 0px;">
                        <div class="card-body" style="padding: 0;">
                            <h4 class="fs-5 fw-semibold card-title"
                                style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">
                                Rayya Amerta Putri</h4>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: #292F78;">
                                {{ __('Grade 2') }}<br>{{ __('Sampoerna Academy Pakuwon Indah') }}</h1>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton; color: var(--bs-emphasis-color); padding-top: 0; margin-top: 24px;">
                                {{ __('Honour Mention') }}</h1>
                            <p class="fw-light card-text" style="font-family: Campton;">
                                {{ __('The 2024-2025 Third SIAT International Youth Art Competition') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('.awards-slider').slick({
                        slidesToShow: 1, // Number of slides to show at once
                        slidesToScroll: 1, // Number of slides to scroll
                        autoplay: true, // Enable autoplay
                        autoplaySpeed: 2000, // Speed of autoplay
                        dots: false, // Show dots for pagination
                        centerMode: false, // Disable center mode
                        variableWidth: true, // Set false to prevent overflow issues
                        responsive: [{
                            breakpoint: 768, // Adjust for mobile
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]
                    });
                });
            </script>
        </section>



        <section style="margin-top: 200px; overflow-x: hidden;">
            <div class="container-fluid"> <!-- Changed to container-fluid for full-width on small screens -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h1 class="fs-2 fw-normal text-center"
                            style="font-family: Campton; color: var(--bs-emphasis-color);">
                            {{ __('An Overview of Sampoerna Academy') }}</h1>
                    </div>
                </div>
                <div class="row">
                    <style>
                        .vertical-line {
                            position: absolute;
                            top: 10%;
                            /* Adjust this value as needed */
                            right: 0;
                            /* Position at the right edge of the column */
                            width: 2px;
                            /* Width of the vertical line */
                            height: 80%;
                            /* Adjust based on desired height */
                            background-color: #000000;
                            /* Color of the line; match or adjust as needed */
                            z-index: 1;
                            /* Ensure it stays above other elements */
                        }
                    </style>
                    <div class="col-12 p-0"> <!-- Removed padding for full width -->
                        <div class="row no-gutters"> <!-- Use no-gutters to prevent gaps -->
                            <div class="col-6 col-md-2 text-center position-relative">
                                <h1 style="font-family: Campton; color: #292F78;">94%</h1>
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __('IGCSE Pass Rate') }}</p>
                                <!-- Vertical line -->
                                <div class="d-none d-md-block vertical-line"></div>
                            </div>
                            <div class="col-6 col-md-2 text-center position-relative">
                                <h1 style="font-family: Campton; color: #292F78;">1 of 3</h1>
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __('Students Gets') }}<br>{{ __('Distinction (A* & A)') }}</p>
                                <!-- Vertical line -->
                                <div class="d-none d-md-block vertical-line"></div>
                            </div>
                            <div class="col-6 col-md-3 text-center position-relative">
                                <h1 style="font-family: Campton; color: #292F78;">1 of 2</h1>
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __('from Medan & Surabaya') }}<br>{{ __('Gets Distinction (A* & A)') }}</p>
                                <!-- Vertical line -->
                                <div class="d-none d-md-block vertical-line"></div>
                            </div>
                            <div class="col-6 col-md-2 text-center position-relative">
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __("BSD & L'Avenue Have") }}</p>
                                <h1 style="font-family: Campton; color: #292F78;">&gt;97%</h1>
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __('Pass Rate') }}</p>
                                <!-- Vertical line -->
                                <div class="d-none d-md-block vertical-line"></div>
                            </div>
                            <div class="col-12 col-md-3 text-center position-relative">
                                <h1 style="font-family: Campton; color: #292F78;">93%</h1>
                                <p class="fw-light" style="font-family: Campton; color: var(--bs-black);">
                                    {{ __('of our students were') }}<br>{{ __('awarded the IB Diploma') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        @include('components.our-teachers')
        <section>
            <div class="container" style="margin-bottom: 50px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="fs-2 fw-semibold text-center"
                            style="font-family: Campton;color: var(--bs-emphasis-color);">
                            {{ __('Where Our Students Shine') }}</h1>
                    </div>
                </div>
            </div>
            <div class="marquee-container">
                <div class="marquee">
                    <div class="marquee-content">
                        <img width="146" height="76"
                            src="assets/img/Campus/Arts%20University%20Bournemouth.webp"
                            alt="Arts University Bournemouth" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Deakin%20University.webp"
                            alt="Deakin University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Universitas%20Gajah%20Mada.webp"
                            alt="Universitas Gajah Mada" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Hanyang%20University.webp"
                            alt="Hanyang University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Kuas.webp" alt="Kuas"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Monash%20University.webp"
                            alt="Monash University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/SMU.webp" alt="SMU"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Universitas%20Indonesia.webp"
                            alt="Universitas Indonesia" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/University%20of%20Amsterdam.webp"
                            alt="University of Amsterdam" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/UIC.webp" alt="UIC"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/University%20of%20Toronto.webp"
                            alt="University of Toronto" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/UNSW%20College.webp"
                            alt="UNSW College" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/The%20University%20of%20Utah.webp"
                            alt="The University of Utah" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Xian%20Jiaotong.webp"
                            alt="Xian Jiaotong" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Xiamen%20Malaysia.webp"
                            alt="Xiamen Malaysia" class="brand-logo">
                    </div>
                    <!-- Satu set konten lagi untuk transisi mulus -->
                    <div class="marquee-content">
                        <img width="146" height="76"
                            src="assets/img/Campus/Arts%20University%20Bournemouth.webp"
                            alt="Arts University Bournemouth" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Deakin%20University.webp"
                            alt="Deakin University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Universitas%20Gajah%20Mada.webp"
                            alt="Universitas Gajah Mada" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Hanyang%20University.webp"
                            alt="Hanyang University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Kuas.webp" alt="Kuas"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Monash%20University.webp"
                            alt="Monash University" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/SMU.webp" alt="SMU"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Universitas%20Indonesia.webp"
                            alt="Universitas Indonesia" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/University%20of%20Amsterdam.webp"
                            alt="University of Amsterdam" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/UIC.webp" alt="UIC"
                            class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/University%20of%20Toronto.webp"
                            alt="University of Toronto" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/UNSW%20College.webp"
                            alt="UNSW College" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/The%20University%20of%20Utah.webp"
                            alt="The University of Utah" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Xian%20Jiaotong.webp"
                            alt="Xian Jiaotong" class="brand-logo">
                        <img width="146" height="76" src="assets/img/Campus/Xiamen%20Malaysia.webp"
                            alt="Xiamen Malaysia" class="brand-logo">
                    </div>
                </div>
            </div>

            <style>
                .marquee-container {
                    overflow: hidden;
                    width: 100%;
                    background-color: transparent;
                    padding: 10px 0;
                }

                .marquee {
                    display: flex;
                    width: calc(200% + 20px);
                    /* Memastikan elemen marquee menyesuaikan dengan kontennya */
                    animation: marquee 40s linear infinite;
                }

                .marquee-content {
                    display: flex;
                }

                .brand-logo {
                    height: 76px;
                    /* Atur tinggi logo sesuai kebutuhan */
                    margin-right: 56px;
                    /* Jarak antar logo */
                    object-fit: contain;
                    /* Memastikan lebar proporsional */
                }

                @keyframes marquee {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }
            </style>
        </section>
        @include('components.community')

        @include('components.form')
    </section>

    @section('sub-footer')
        @include('components.sub-footer')
    @endsection


    @include('toolbox')
    @yield('sub-footer')
    @include('components.footer')
    <!-- Defer loading of Bootstrap script -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" defer></script>

    <!-- Combine script.min.js and script.js if possible -->
    <script src="{{ asset('assets/js/script.min.js') }}" defer></script>



</body>

</html>
