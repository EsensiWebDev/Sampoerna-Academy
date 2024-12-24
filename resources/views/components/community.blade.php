<section style="margin-top: 200px;">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-12">
                <h1 class="fs-2 fw-semibold text-center" style="font-family: Campton;color: var(--bs-emphasis-color);">
                    {{ __('Hear from Our Community') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <style>
                        /* CSS untuk transparansi tab */
                        .nav-tab {
                            opacity: 0.5;
                            /* Default opacity untuk tab tidak aktif */
                            transition: opacity 0.3s;
                            /* Transisi untuk efek halus */
                            margin-right: 50px;
                            font-size: 1rem;
                            /* Ukuran font default */
                        }

                        .nav-tab.active {
                            opacity: 1;
                            /* Tab aktif penuh */
                        }
                    </style>

                    <ul class="nav nav-tabs justify-content-center" role="tablist"
                        style="border-style: none; margin-bottom: 40px;">
                        <li class="nav-item" role="presentation" style="border-style: none;">
                            <a class="nav-tab active fs-4 link-danger" role="tab" data-bs-toggle="tab"
                                href="#tab-1" style="border-style: none; border-radius: 0px; font-family: Campton;">
                                <span><img src="assets/img/Icon/Mask%20group.webp"
                                        style="width: 24px; height: 24px;"></span>&nbsp;{{ __('Parents') }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="border-style: none;">
                            <a class="nav-tab fs-4 link-danger" role="tab" data-bs-toggle="tab" href="#tab-2"
                                style="border-style: none; border-radius: 0px; font-family: Campton;">
                                <span><img src="assets/img/Icon/Mask group-1.webp"
                                        style="width: 24px; height: 24px;"></span>&nbsp;{{ __('Students') }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-tab fs-4 link-danger" role="tab" data-bs-toggle="tab" href="#tab-3"
                                style="border-style: none; border-radius: 0px; font-family: Campton;">
                                <span><img src="assets/img/Icon/Mask%20group%20(2).webp"
                                        style="width: 24px; height: 24px;"></span>&nbsp;{{ __('Teachers') }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-tab fs-4 link-danger" role="tab" data-bs-toggle="tab" href="#tab-4"
                                style="border-style: none; border-radius: 0px; font-family: Campton;">
                                <span><img src="assets/img/Icon/Mask%20group%20(3).webp"
                                        style="width: 24px; height: 24px;"></span>&nbsp;{{ __('Alumni') }}
                            </a>
                        </li>
                    </ul>

                    <script>
                        $(document).ready(function() {
                            // Mengupdate opacity saat tab diubah
                            $('a[data-bs-toggle="tab"]').on('click', function() {
                                // Set semua tab menjadi transparan
                                $('.nav-tab').removeClass('active').css('opacity',
                                    0.5); // Menghapus kelas active dan mengatur opacity
                                // Set tab yang aktif menjadi tidak transparan
                                $(this).addClass('active').css('opacity',
                                    1); // Menambahkan kelas active dan mengatur opacity menjadi penuh
                            });
                        });
                    </script>


                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="d-flex flex-column flex-md-row justify-content-around">
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/bimbim.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58" class="img-fluid"
                                            src="assets/img/Tab/“%20(Stroke).webp" style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('The International curriculum is excellent,') }}&nbsp;</h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("so we wanted to give Talullah the best. She's learned so much; the lessons are challenging, but Talullah has been able to excel at them. The process has shaped her into a better person.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Bimo Setiawan & Reni Setiawati') }}</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Parents of Talullah Alami, Sampoerna Academy L’Avenue') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/melani%20ricardo.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <img class="img-fluid" width="58" height="58"
                                            src="assets/img/Tab/“%20(Stroke).webp" style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __("We Chose Sampoerna Academy because of strong recommendations from friends, and we're pleased with Chloe's progress.") }}
                                            </h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("Chloe's understanding of all subjects has improved, and we're very happy about that. We don't push her too hard; as long as she's doing her best, that's what matters to us. We're also glad she's more eager to speak English.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Melaney & Tyson') }}</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Parents of Chloe Lynch, Sampoerna Academy L’Avenue') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div class="d-flex flex-column flex-md-row  justify-content-around">
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/benecdito.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('The library at Sampoerna Academy BSD is very spacious and has a wide variety of books.') }}
                                            </h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("There is also a cozy mezzanine that offers a different environment. It's like mini house and I enjoy spending time there.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">Benecdito Darren
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/jonah.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('What I love about Sampoerna Academy is the trilingual environment.') }}
                                            </h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("where we can speak English, Bahasa, and Mandarin. The Bahasa teacher is always helpful in translating words I don't know during class.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">Jonah</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <div class="d-flex flex-column flex-md-row  justify-content-between">
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/mr%20heize.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('Math at Sampoerna Academi is unique') }}</h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __('because it integrates STEAM approach into daily activities, providing students opportunities to apply mathematics concept to real-world projects.') }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Mr. Heize') }}</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __("Math Teacher, Sampoerna Academy L'Avenue") }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/Airene%20Gonzales%20Orencio.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('The playroom in Sampoerna Academy is designed to resemble real-life buildings') }}
                                            </h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __('like a police station, hospital, and fire station. This gives kids a pratical experience and applying their learningin a real-world situations.') }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Ms. Airene') }}</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('K2 Homeroom Teacher, Sampoerna Academy BSD') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-4">
                            <div class="d-flex flex-column flex-md-row  justify-content-around">
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/FARALUNA%20SABIA%20GUNADI.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __('The International curriculum is excellent,') }}&nbsp;</h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("so we wanted to give Talullah the best. She's learned so much; the lessons are challenging, but Talullah has been able to excel at them. The process has shaped her into a better person.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">Bimo Setiawan
                                                &amp; Reni Setiawati</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Parents of Talullah Alami, Sampoerna Academy L’Avenue') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"
                                    style="padding-left: 10px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;">
                                    <div class="col-sm-12 col-md-4 mb-2">
                                        <img class="tab-img" src="assets/img/Tab/putri%20yasmina.webp">
                                    </div>
                                    <div class="col-sm-12 col-md-8"><img width="58" height="58"
                                            class="img-fluid" src="assets/img/Tab/“%20(Stroke).webp"
                                            style="width: 40px;">
                                        <div style="margin-bottom: 20px;">
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);margin-bottom: 12px;">
                                                {{ __("We Chose Sampoerna Academy because of strong recommendations from friends, and we're pleased with Chloe's progress.") }}
                                            </h1>
                                            <p class="fw-light" style="color: var(--bs-black);font-family: Campton;">
                                                {{ __("Chloe's understanding of all subjects has improved, and we're very happy about that. We don't push her too hard; as long as she's doing her best, that's what matters to us. We're also glad she's more eager to speak English.") }}
                                            </p>
                                        </div>
                                        <div>
                                            <h1 class="fs-5 fw-semibold"
                                                style="font-family: Campton;color: var(--bs-black);">Melaney &amp;
                                                Tyson</h1>
                                            <p class="fw-light" style="font-family: Campton;color: var(--bs-black);">
                                                {{ __('Parents of Chloe Lynch, Sampoerna Academy L’Avenue') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
