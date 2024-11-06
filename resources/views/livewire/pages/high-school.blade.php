<section id="high-school">
    <section style="margin-bottom: 200px;">
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;../assets/img/Carousel/Highschool%20hero.webp&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __("High School") }}</h1>
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
                        <h1 class="display-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;">{{ __("Empowering Young Leaders with A Global Perspective") }}</h1>
                    </div>
                    <div style="margin-top: 24px;">
                        <p class="fs-5 fw-light" style="font-family: Campton;color: var(--bs-black);">{{ __("With our global-focused curriculum, students develop essential skills, gain international perspectives, and receive personalized guidance as they prepare for higher education") }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mb-4 mb-md-0 ">
                    <div style="background: url(&quot;../assets/img/Banner/Highschool%20image.webp&quot;) center / cover no-repeat;max-height: 392px;height: 392px;"></div>
                    <div style="background: #CE3827;">
                        <p class="fw-light" style="font-family: Campton;color: var(--bs-white);margin-bottom: 0px;padding-left: 24px;padding-right: 24px;padding-top: 20px;padding-bottom: 20px;">{{ __("Grade 10 | Grade 11 | Grade 12") }}</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-row align-items-lg-center justify-content-xxl-start align-items-xxl-center">
                    <div style="padding-left: 16px;padding-right: 16px;">
                        <h1 class="fs-2 fw-semibold" style="font-family: Campton;color: var(--bs-black);">{{ __("High School Grades") }}</h1>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("We offer a comprehensive international curriculum, including <br>Cambridge Assessment and IB Diploma, to prepare students") }}<br>{{ __("for global success") }}.</p>
                        <div class="d-flex flex-row align-items-lg-center align-items-xxl-center" style="margin-top: 24px;">
                            <div style="background: url(&quot;../assets/img/Logo/Cambridge%20New%20Logo1%201.webp&quot;) center / contain no-repeat;width: 129px;height: 57px;margin-right: 10px;margin-left: 0px;"></div>
                            <div style="background: url(&quot;../assets/img/Logo/Diploma%20degree.webp&quot;) center / contain no-repeat;width: 223px;height: 57px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("components.our-curriculum")
    @include("components.facilities")
    @include("components.available")
    @include("components.download")
</section>
