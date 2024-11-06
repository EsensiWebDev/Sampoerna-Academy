<section id="online-school">
    <section style="margin-bottom: 200px;">
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;../assets/img/Carousel/Online%20school.webp&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __("Sampoerna Academy Online School") }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 class="display-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;">{{ __("Flexible Learning, Personalized Support") }}</h1>
                    </div>
                    <div style="margin-top: 24px;">
                        <p class="fs-5 fw-light" style="font-family: Campton;color: var(--bs-black);">{{ __("Sampoerna Academy Online redefines education by breaking down conventional") }} <br> {{ __("barriers to world class learning experience. Students have the opportunities to") }}<br>{{ __("learn at their own pace, time, and place") }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xxl-6" style="width: 1189px;">
                    <div style="background: url(&quot;../assets/img/Banner/Online%20school%20image.webp&quot;) center / cover no-repeat;max-height: 392px;height: 392px;"></div>
                    <div style="background: #CE3827;">
                        <p class="fw-light" style="font-family: Campton;color: var(--bs-white);margin-bottom: 0px;padding-left: 24px;padding-right: 24px;padding-top: 20px;padding-bottom: 20px;">{{ __("Grade 7 | Grade 8 | Grade 9") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <h1 class="fs-2 fw-semibold text-center" style="font-family: Campton; margin-bottom: 40px;">{{ __("Our Curriculum") }}</h1>

        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 mb-4"> <!-- 2 kolom untuk mobile, 3 kolom untuk tablet -->
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="/assets/img/Icon/Globe.webp" style="width: 24px;">
                            <h1 class="fs-5 card-title" style="font-family: Campton; color: #292F78; margin-top: 16px;">
                                {{ __("Purposely tailored international curriculum:")}}<br>{{ __("Cambridge and Singapore Mathematics") }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="/assets/img/Icon/Study.webp" style="width: 24px;">
                            <h1 class="fs-5 card-title" style="font-family: Campton; color: #292F78; margin-top: 16px;">
                                {{ __("Independent self study learning sessions") }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="/assets/img/Icon/teacher.webp" style="width: 24px;">
                            <h1 class="fs-5 card-title" style="font-family: Campton; color: #292F78; margin-top: 16px;">
                                {{ __("Facilitated live discussions") }}<br>{{ __("with instructors and other learners") }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="/assets/img/Icon/Curriculum.webp" style="width: 24px;">
                            <h1 class="fs-5 card-title" style="font-family: Campton; color: #292F78; margin-top: 16px;">
                                {{ __("CANVAS as learning platform-used") }}<br>{{ __("by renowned institutions such as") }}<br>{{ __("Harvard and Oxford") }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <img src="/assets/img/Icon/college%20counselling.webp" style="width: 24px;">
                            <h1 class="fs-5 card-title" style="font-family: Campton; color: #292F78; margin-top: 16px;">
                                {{ __("University and Career Counselling for") }}<br>{{ __("Upper Secondary students") }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 mb-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <a href="https://online.sampoernaacademy.sch.id/" style="color: #292F78; font-family: Campton;">Read More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L13.7071 14.7071C13.3166 15.0976 12.6834 15.0976 12.2929 14.7071C11.9024 14.3166 11.9024 13.6834 12.2929 13.2929L14.5858 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H14.5858L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z" fill="currentColor"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("components.download")
</section>

@section("sub-footer")
    @include("components.sub-footer")
@endsection
