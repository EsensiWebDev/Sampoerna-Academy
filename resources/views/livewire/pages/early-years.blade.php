<section id="early-years">
    <section style="margin-bottom: 200px;">
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;../assets/img/Carousel/banner%20early%20years.jpg&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __("Early Years") }}</h1>
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
                        <h1 class="display-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;">{{ __("A Happy Place to Learn and Grow") }}</h1>
                    </div>
                    <div style="margin-top: 24px;">
                        <p class="fs-5 fw-light" style="font-family: Campton;color: var(--bs-black);">{{ __("We nurture your child's curiosity through play. Our curriculum helps young learners") }}<br>{{ __("develop essential language, math, and social skills in a fun and meaningful way.") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="background: url(&quot;../assets/img/Banner/early%20years%20grade.jpg&quot;) center / cover no-repeat;max-height: 392px;height: 392px;"></div>
                    <div style="background: #CE3827;">
                        <p class="fw-light" style="font-family: Campton;color: var(--bs-white);margin-bottom: 0px;padding-left: 24px;padding-right: 24px;padding-top: 20px;padding-bottom: 20px;">{{ __("Toddler (Medan Only) | Playgroup | Pre Kindergarten ") }}<br>{{ __("Kindergarten 1 | Kindergarten 2") }}</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-row justify-content-xxl-start align-items-xxl-center">
                    <div style="padding-left: 16px;padding-right: 16px;">
                        <h1 class="fs-2 fw-semibold" style="font-family: Campton;color: var(--bs-black);">{{ __("Early Years Grades") }}</h1>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("At Pre-Kindergarten level, the learning program is promoted with cognitive, physical, social-emotional, and language development through play.") }}</p>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("At Kindergarten level, the learning program is employed by emphasizing on numeracy, literacy, as well as social and emotional development by") }}<br>{{ __("implementing a wide range of internationally endorsed learning programs/resources.") }}</p>
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

@section("sub-footer")
    @include("components.sub-footer")
@endsection
