<section id="early-years">
    <section style="margin-bottom: 200px;">
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;../assets/img/Carousel/banner%20early%20years.webp&quot;) center / cover no-repeat;">
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
                        <p class="fs-5 fw-light" style="font-family: Campton;color: var(--bs-black);">{{ __("We nurture your child’s curiosity through play, creating an environment where they feel excited and comfortable to explore and learn. Our focus is on making their educational journey positive and engaging, ensuring they thrive both academically and personally.") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div style="background: url(&quot;../assets/img/Banner/early%20years%20grade.webp&quot;) center / cover no-repeat;max-height: 392px;height: 392px;"></div>
                    <div style="background: #CE3827;">
                        <p class="fw-light" style="font-family: Campton;color: var(--bs-white);margin-bottom: 0px;padding-left: 24px;padding-right: 24px;padding-top: 20px;padding-bottom: 20px;">{{ __("Toddler (Medan only | < 24 months) | Playgroup (2 tahun) ") }}<br>{{ __("Pre-Kindergarten (3 tahun) | Kindergarten 1 (4 tahun)") }} <br> {{__("Kindergarten 2 (5 tahun)")}}</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-row justify-content-xxl-start align-items-xxl-center">
                    <div style="padding-left: 16px;padding-right: 16px;">
                        <h1 class="fs-2 fw-semibold" style="font-family: Campton;color: var(--bs-black);">{{ __("Early Years Grades") }}</h1>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("We create a joyful, stress-free early learning journey where children grow holistically in a fun, child-focused environment. Each grade in our Early Years program is thoughtfully curated to gradually introduce formal education.") }}</p>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("In Toddler to Playgroup, we focus on communication, social-emotional, and physical well-being through playful exploration.") }}</p>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("Prekindergarten builds on this with pre-literacy and pre-numeracy skills, while nurturing creativity and curiosity.") }}</p>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("By Kindergarten 1 and 2, our programs prepare children for Grade 1, making learning to read, write, and count an exciting adventure and introducing Mandarin and Bahasa Indonesia.") }}</p>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("We ensure every child’s first educational experience is memorable, effective, and smoothly progressive.") }}</p>
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
