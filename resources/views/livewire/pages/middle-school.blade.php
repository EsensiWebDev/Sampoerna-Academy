<section id="middle-school">
    <section style="margin-bottom: 200px;">
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;../assets/img/Carousel/Middle%20School%20Hero.webp&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __("Middle School") }}</h1>
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
                        <h1 class="display-4 fw-semibold" style="color: var(--bs-black);font-family: Campton;">{{ __("Intensive STEAM Learning for Academic Achievements") }}</h1>
                    </div>
                    <div style="margin-top: 24px;">
                        <p class="fs-5 fw-light" style="font-family: Campton;color: var(--bs-black);">{{ __("We prepare students for academic excellence with our intensive STEAM curriculum") }}, <br>{{ __("focusing on Cambridge IGCSE and Ujian Nasional exams") }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6  mb-4 mb-md-0 ">
                    <div style="background: url(&quot;../assets/img/Banner/Middle%20School%20Image.webp&quot;) center / cover no-repeat;max-height: 392px;height: 392px;"></div>
                    <div style="background: #CE3827;">
                        <p class="fw-light" style="font-family: Campton;color: var(--bs-white);margin-bottom: 0px;padding-left: 24px;padding-right: 24px;padding-top: 20px;padding-bottom: 20px;">{{ __("Grade 7 | Grade 8 | Grade 9") }}</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-row align-items-lg-center justify-content-xxl-start align-items-xxl-center">
                    <div style="padding-left: 16px;padding-right: 16px;">
                        <h1 class="fs-2 fw-semibold" style="font-family: Campton;color: var(--bs-black);">{{ __("Middle School Grades") }}</h1>
                        <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">{{ __("Students have the flexibility to choose from a variety of subjects beyond the mandatory English and Math courses. Options include Biology, Chemistry, Physics, Geography, Economics, Enterprise, Global Perspectives, Social Studies, and Arts.") }}</p>
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
