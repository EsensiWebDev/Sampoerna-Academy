<section style="margin-top: 200px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="fs-2 fw-semibold" style="font-family: Campton;">{{ __("Our Curriculum") }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <ul class="nav nav-tabs d-flex flex-column" role="tablist" style="border-style: none; margin-bottom: 40px;">
                        <li class="nav-item" role="presentation" style="border-style: none;">
                            <a class="nav-link fs-4 active" role="tab" data-bs-toggle="tab" href="#tab-1" style="border-style: none; border-radius: 0; font-family: Campton; padding-left: 0;">
                                <span><img src="/assets/img/Icon/Based%20learning.png" class="tab-icon" style="width: 24px; height: 24px;"></span>&nbsp;{{ __("Holistic Development") }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation" style="border-style: none;">
                            <a class="nav-link fs-4" role="tab" data-bs-toggle="tab" href="#tab-2" style="border-style: none; border-radius: 0; font-family: Campton; padding-left: 0;">
                                <span><img src="/assets/img/Icon/Parents.png" class="tab-icon" style="width: 24px; height: 24px;"></span>&nbsp;{{ __("Parents as Partners") }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link fs-4" role="tab" data-bs-toggle="tab" href="#tab-3" style="border-style: none; border-radius: 0; font-family: Campton; padding-left: 0;">
                                <span><img src="/assets/img/Icon/Assessment.png" class="tab-icon" style="width: 24px; height: 24px;"></span>&nbsp;{{ __("Customized Learning and Support for Every Child") }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link fs-4" role="tab" data-bs-toggle="tab" href="#tab-4" style="border-style: none; border-radius: 0; font-family: Campton; padding-left: 0;">
                                <span><img src="/assets/img/Icon/Deep%20Learning.png" class="tab-icon" style="width: 24px; height: 24px;"></span>&nbsp;{{ __("STEAM Deep Learning Projects") }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link fs-4" role="tab" data-bs-toggle="tab" href="#tab-5" style="border-style: none; border-radius: 0; font-family: Campton; padding-left: 0;">
                                <span><img src="/assets/img/Icon/Curriculum.png" class="tab-icon" style="width: 24px; height: 24px;"></span>&nbsp;{{ __("International Early Years Curriculum") }}
                            </a>
                        </li>
                    </ul>

                    <style>
                        .tab-pane {
                            width: 700px; /* Default width for larger screens */
                            height: auto;
                        }

                        .nav-link {
                            color: gray; /* Default color for inactive tabs */
                        }

                        .nav-link.active {
                            color: #292F78 !important; /* Active tab color */
                        }

                        .tab-icon {
                            opacity: 0.4;
                        }

                        .nav-link.active .tab-icon {
                            opacity: 1 !important;
                        }


                        @media (max-width: 768px) {
                            .tab-pane {
                                width: auto; /* Set to auto for mobile devices */
                            }
                        }
                    </style>


                    <div class="tab-content flex-grow-1" style="background: #E4E4EB; padding: 40px; border-radius: 15px;">
                        <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                            <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("We champion the development of the whole child—socially, emotionally, cognitively, and physically. Our approach balances academic skills with soft skills, ensuring that children excel both in their studies and personal growth.  This well-rounded approach ensures a comprehensive, enriching educational experience that supports every aspect of your child’s development.") }}</p>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-2">
                            <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("Parent involvement is vital for creating a supportive learning environment where children feel valued, motivated, and empowered to explore, discover, and succeed. By working together, parents and educators can nurture children’s holistic development and lay a strong foundation for their future success. This is done in various ways, some of them are:  1. Partnership & communication  2. Orientation & workshops  3. Parent involvement in learning  4. Home Learning Support  5. Celebration of Learning") }}</p>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-3">
                            <div class="d-flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-dot fs-5" style="font-family: Campton;">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path>
                                </svg>
                                <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("We embrace a personalized approach with the flexible IEYC curriculum, allowing our educators to tailor activities to each child’s needs and interests. Outcome-based assessments for literacy and numeracy provide effective support, helping children grow and develop their skills according to their unique learning styles and paces.") }}</p>
                            </div>
                            {{-- <div class="d-flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-dot fs-5">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path>
                                </svg>
                                <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("The clear objectives of the assessment allow teachers to deploy various teaching methods to attain the desired outcomes among their students.") }}</p>
                            </div> --}}
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-4">
                            <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("Through our IEYC program, children participates in exciting short-term and long-term projects that explore interesting topics and themes. These activities encourage kids to ask questions, gather information, experiment, and draw conclusions, helping them develop crucial 21st-century skills like problem-solving and adaptability. This hands-on approach not only makes learning fun but also prepares them for future success.") }}</p>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-5">
                            <p class="fs-5 fw-light" style="font-family: Campton;">{{ __("IEYC is a comprehensive, thematic, play-based curriculum for children aged 2-5 years old. It focuses on the holistic development of children, encompassing their personal, social, emotional, and physical development, as well as their academic learning. The curriculum is designed to be flexible, adaptable, and accessible to schools and early years settings worldwide. It emphasizes inquiry-based learning, encouraging children to explore, investigate, and make sense of the world around them through hands-on experiences and play.") }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section("sub-footer")
    @include("components.sub-footer")
@endsection



