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
                            style="border-radius: 0px; object-fit: cover;" src="assets/img/Card/Rectangle%209036.webp">
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
                            style="border-radius: 0px; object-fit: cover;"
                            src="assets/img/Card/Rectangle%209036%20(1).webp">
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
                            style="border-radius: 0px; object-fit: cover;"
                            src="assets/img/Card/Rectangle%209036%20(2).webp">
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
                            style="border-radius: 0px; object-fit: cover;"
                            src="assets/img/Card/Rectangle%209036%20(3).webp">
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
                    {{-- instagram 1 --}}
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DCfw7wtTrLC/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a
                                href="https://www.instagram.com/p/DCfw7wtTrLC/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg"
                                        xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div
                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div
                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                        </div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div
                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                    </div>
                                </div>
                            </a>
                            <p
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DCfw7wtTrLC/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                    target="_blank">A post shared by Sampoerna Academy (@sampoerna.academy)</a>
                            </p>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    {{-- instagram 2 --}}
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DCGojzMTTGo/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a
                                href="https://www.instagram.com/p/DCGojzMTTGo/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg"
                                        xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div
                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div
                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                        </div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div
                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                    </div>
                                </div>
                            </a>
                            <p
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DCGojzMTTGo/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                    target="_blank">A post shared by Sampoerna Academy (@sampoerna.academy)</a>
                            </p>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    {{-- instagram 3 --}}
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DAaZQV7yta4/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a
                                href="https://www.instagram.com/p/DAaZQV7yta4/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg"
                                        xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div
                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div
                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                        </div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div
                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                    </div>
                                </div>
                            </a>
                            <p
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DAaZQV7yta4/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                    target="_blank">A post shared by Sampoerna Academy (@sampoerna.academy)</a>
                            </p>
                        </div>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    {{-- instagram 4 --}}
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DCgpvmKTzTJ/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a
                                href="https://www.instagram.com/p/DCgpvmKTzTJ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg"
                                        xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div
                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div
                                    style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                        </div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div
                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                    </div>
                                </div>
                            </a>
                            <p
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                <a href="https://www.instagram.com/p/DCgpvmKTzTJ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                    target="_blank">A post shared by Sampoerna Academy (@sampoerna.academy)</a>
                            </p>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    {{-- <section style="margin-top: 200px;">
        <div class="container">
            <div class="row" style="margin-bottom: 48px;">
                <div class="col-md-12">
                    <h1 class="fs-2 fw-semibold text-center"
                        style="font-family: Campton;color: var(--bs-emphasis-color);">
                        {{ __('Tiktok Content') }}</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    <blockquote class="tiktok-embed"
                        cite="https://www.tiktok.com/@sampoernaacademy/video/7446756174021627154"
                        data-video-id="7446756174021627154" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@sampoernaacademy"
                                href="https://www.tiktok.com/@sampoernaacademy?refer=embed">@sampoernaacademy</a>
                            Gimana
                            sih pengalaman leadership students kami di Duke of Edinburgh Award? Tonton sampe akhir, dan
                            stay
                            tuned untuk part 2 ya! <a title="ignitethespark" target="_blank"
                                href="https://www.tiktok.com/tag/ignitethespark?refer=embed">#IGNITEtheSpark</a> <a
                                title="sampoernaacademy" target="_blank"
                                href="https://www.tiktok.com/tag/sampoernaacademy?refer=embed">#SampoernaAcademy</a> <a
                                target="_blank" title="♬ original sound  - Sampoerna Academy"
                                href="https://www.tiktok.com/music/original-sound-Sampoerna-Academy-7446756227558345489?refer=embed">♬
                                original sound - Sampoerna Academy</a> </section>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    <blockquote class="tiktok-embed"
                        cite="https://www.tiktok.com/@sampoernaacademy/video/7444865842464165138"
                        data-video-id="7444865842464165138" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@sampoernaacademy"
                                href="https://www.tiktok.com/@sampoernaacademy?refer=embed">@sampoernaacademy</a> Quiz
                            antara Sophie dan ibunya! Kira-kira siapa yaa yang menang?🤓 <a title="ignitethespark"
                                target="_blank"
                                href="https://www.tiktok.com/tag/ignitethespark?refer=embed">#IGNITEtheSpark</a> <a
                                title="sampoernaacademy" target="_blank"
                                href="https://www.tiktok.com/tag/sampoernaacademy?refer=embed">#SampoernaAcademy</a> <a
                                target="_blank" title="♬ original sound  - Sampoerna Academy"
                                href="https://www.tiktok.com/music/original-sound-Sampoerna-Academy-7444865866338028305?refer=embed">♬
                                original sound - Sampoerna Academy</a> </section>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    <blockquote class="tiktok-embed"
                        cite="https://www.tiktok.com/@sampoernaacademy/video/7444486318328958226"
                        data-video-id="7444486318328958226" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@sampoernaacademy"
                                href="https://www.tiktok.com/@sampoernaacademy?refer=embed">@sampoernaacademy</a> Pesan
                            buat temen-temen yang baru masuk SMA, nih!👀 <a title="ignitethespark" target="_blank"
                                href="https://www.tiktok.com/tag/ignitethespark?refer=embed">#IGNITEtheSpark</a> <a
                                title="sampoernaacademy" target="_blank"
                                href="https://www.tiktok.com/tag/sampoernaacademy?refer=embed">#SampoernaAcademy</a> <a
                                target="_blank" title="♬ original sound  - Sampoerna Academy"
                                href="https://www.tiktok.com/music/original-sound-Sampoerna-Academy-7444486340270738177?refer=embed">♬
                                original sound - Sampoerna Academy</a> </section>
                    </blockquote>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
                    <blockquote class="tiktok-embed"
                        cite="https://www.tiktok.com/@sampoernaacademy/video/7440021132876483858"
                        data-video-id="7440021132876483858" style="max-width: 605px;min-width: 325px;">
                        <section> <a target="_blank" title="@sampoernaacademy"
                                href="https://www.tiktok.com/@sampoernaacademy?refer=embed">@sampoernaacademy</a> Kelas
                            12 udah makin deket sama kuliah! Penasaran anak Sampoerna Academy mau lanjut ke mana? Yuk,
                            intip bareng! <a title="ignitethespark" target="_blank"
                                href="https://www.tiktok.com/tag/ignitethespark?refer=embed">#IGNITEtheSpark</a> <a
                                title="sampoernaacademy" target="_blank"
                                href="https://www.tiktok.com/tag/sampoernaacademy?refer=embed">#SampoernaAcademy</a> <a
                                target="_blank" title="♬ original sound  - Sampoerna Academy"
                                href="https://www.tiktok.com/music/original-sound-Sampoerna-Academy-7440021259196353281?refer=embed">♬
                                original sound - Sampoerna Academy</a> </section>
                    </blockquote>
                </div>
            </div>
        </div>
    </section> --}}
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
                                style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">Claire
                                Nicole Lin</h4>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton;color: #292F78;">{{ __('Grade 7') }}
                                <br>{{ __('Sampoerna Academy Online') }}
                            </h1>
                            <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                                style="font-family: Campton;color: var(--bs-emphasis-color);padding-top: 0px;margin-top: 24px;padding-bottom: 0px;">
                                {{ __('First Place') }}</h1>
                            <p class="fw-light card-text" style="font-family: Campton;">
                                {{ __('The 3rd Tokyo International Youth Piano Competition Final Round') }}</p>
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
                                style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">Alaric
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
                                style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">Rayya
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
                                style="font-family: Campton;color: var(--bs-emphasis-color);margin-bottom: 8px;">Rayya
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
    <section style="margin-top: 200px; overflow-x: hidden;" class="d-sm-block d-md-none"> <!-- Added overflow-x -->
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
                            style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">Claire
                            Nicole Lin</h4>
                        <h1 class="fs-6 fw-semibold card-subtitle mb-2" style="font-family: Campton; color: #292F78;">
                            {{ __('Grade 7') }}<br>{{ __('Sampoerna Academy Online') }}</h1>
                        <h1 class="fs-6 fw-semibold card-subtitle mb-2"
                            style="font-family: Campton; color: var(--bs-emphasis-color); padding-top: 0; margin-top: 24px;">
                            {{ __('First Place') }}</h1>
                        <p class="fw-light card-text" style="font-family: Campton;">
                            {{ __('The 3rd Tokyo International Youth Piano Competition Final Round') }}</p>
                    </div>
                </div>

                <!-- Award Item 2 -->
                <div class="slick-item" style="border-style: none; border-radius: 0px;">
                    <img class="card-img-top w-100 d-block"
                        src="assets/img/Card/WhatsApp%20Image%202024-07-03%20at%2015.14.25.webp"
                        style="border-radius: 0px;">
                    <div class="card-body" style="padding: 0;">
                        <h4 class="fs-5 fw-semibold card-title"
                            style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">Alaric
                            Wongso</h4>
                        <h1 class="fs-6 fw-semibold card-subtitle mb-2" style="font-family: Campton; color: #292F78;">
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
                        src="assets/img/Card/7C7877D0-E285-49C8-A926-D5FA84D2C3BA.webp" style="border-radius: 0px;">
                    <div class="card-body" style="padding: 0;">
                        <h4 class="fs-5 fw-semibold card-title"
                            style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">Rayya
                            Amerta Putri</h4>
                        <h1 class="fs-6 fw-semibold card-subtitle mb-2" style="font-family: Campton; color: #292F78;">
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
                        src="assets/img/Card/38BD808C-FDE3-4A8C-9246-D3DC0E1B59F1.webp" style="border-radius: 0px;">
                    <div class="card-body" style="padding: 0;">
                        <h4 class="fs-5 fw-semibold card-title"
                            style="font-family: Campton; color: var(--bs-emphasis-color); margin-bottom: 8px;">Rayya
                            Amerta Putri</h4>
                        <h1 class="fs-6 fw-semibold card-subtitle mb-2" style="font-family: Campton; color: #292F78;">
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
                    <img width="146" height="76" src="assets/img/Campus/Arts%20University%20Bournemouth.webp"
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
                    <img width="146" height="76" src="assets/img/Campus/Arts%20University%20Bournemouth.webp"
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

    <livewire:latest-update-article />


</section>
{{-- <script async src="https://www.tiktok.com/embed.js"></script> --}}

<script async src="//www.instagram.com/embed.js"></script>

@section('sub-footer')
    @include('components.sub-footer')
@endsection
