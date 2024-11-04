<nav class="navbar navbar-expand-md fixed-top navbar-dark-bg" style="padding-top: 24px;padding-bottom: 24px;" data-bs-theme="dark">
    <div class="container"><a class="navbar-brand" href="/index.html"
                              style="background: url({{ asset("assets/img/Logo/Logo%20Sampoerna%20Academy.png") }}) center / contain no-repeat;width: 228px;height: 93.82px;margin-right: 0px;padding-bottom: 0px;padding-top: 0px;"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="border-style: none;border-radius: 0px;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <div class="ms-auto">
                <ul class="navbar-nav d-md-flex d-lg-flex ms-auto justify-content-md-end justify-content-lg-end">
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fw-normal link-body-emphasis" href="/career" wire:navigate,hover style="color: var(--bs-white);font-family: Campton;">{{ __("Career") }}</a></li>
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fw-normal link-body-emphasis" href="/news" wire:navigate.hover style="color: var(--bs-white);font-family: Campton;">{{ __("News") }}</a></li>
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fw-normal link-body-emphasis" href="/contact" wire:navigate.hover style="color: var(--bs-white);font-family: Campton;">{{ __("Contact") }}</a></li>
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fw-normal link-body-emphasis" href="/faq" wire:navigate.hover style="color: var(--bs-white);font-family: Campton;">{{ __("FAQ") }}</a></li>
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fw-normal link-body-emphasis" href="#" style="color: var(--bs-white);font-family: Campton;"><img src="{{ asset("assets/img/Flag/circle-flags_us.png") }}" style="width: 20px;">&nbsp;English</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a class="nav-link fs-5 link-body-emphasis" wire:navigate.hover href="/aboutus" style="font-family: Campton;padding-right: 0px;">{{ __('aboutUs') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5 link-body-emphasis" aria-expanded="false" data-bs-toggle="dropdown" href="aboutus.html" style="color: var(--bs-white);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z" fill="currentColor"></path>
                                </svg></a>
                            <div class="dropdown-menu" style="padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a class="dropdown-item fw-light" href="/aboutus/ourapproach" wire:navigate.hover>{{ __("Our Approach") }}</a>
                                <div class="dropdown-divider" style="border-width: 1px;border-color: rgb(0,0,0);margin-left: 14px;margin-right: 14px;"></div><a class="dropdown-item fw-light" href="/aboutus/leadership" wire:navigate.hover>{{ __("Leadership") }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="font-family: Campton;"><a class="nav-link fs-5 link-body-emphasis" href="/steam" style="color: var(--bs-white);" wire:navigate.hover>{{ __("steam") }}</a></li>
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a class="nav-link fs-5 link-body-emphasis" href="/academics" style="font-family: Campton;padding-right: 0px;" wire:navigate.hover>{{ __("academics") }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5 link-body-emphasis" aria-expanded="false" data-bs-toggle="dropdown" href="academics.html" style="color: var(--bs-white);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z" fill="currentColor"></path>
                                </svg></a>
                            <div class="dropdown-menu" style="padding-top: 8px;padding-bottom: 8px;padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a class="dropdown-item fw-light" href="/academics/early-years" wire:navigate.hover>{{ __("Early Years") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/academics/elementary-school" wire:navigate.hover>{{ __("Elementary School")  }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/academics/middle-school" wire:navigate.hover>{{ __("Middle School") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/academics/high-school" wire:navigate.hover>{{ __("High School") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/academics/online-school" wire:navigate.hover>{{ __("Online School") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/academics/calendars" wire:navigate.hover>{{ __("Calendars") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="https://library.sampoernaacademy.sch.id/">{{ __("Library") }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a class="nav-link fs-5 link-body-emphasis" href="/ourschools" wire:navigate.hover style="font-family: Campton;padding-right: 0px;">{{ __("Our Schools") }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-white);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z" fill="currentColor"></path>
                                </svg></a>
                            <div class="dropdown-menu" style="padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a class="dropdown-item fw-light" href="/ourschools/lavenue" wire:navigate.hover>{{ __("L’Avenue School") }}</a>
                                <div class="dropdown-divider" style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div><a class="dropdown-item fw-light" href="/ourschools/bsd" wire:navigate.hover>{{ __("BSD School") }}</a>
                                <div class="dropdown-divider" style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div><a class="dropdown-item fw-light" href="/ourschools/sentul" wire:navigate.hover>{{ __("Sentul School") }}</a>
                                <div class="dropdown-divider" style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div><a class="dropdown-item fw-light" href="/ourschools/surabaya" wire:navigate.hover>{{ __("Surabaya School") }}</a>
                                <div class="dropdown-divider" style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div><a class="dropdown-item fw-light" href="/ourschools/medan" wire:navigate.hover>{{ __("Medan School") }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a class="nav-link fs-5 link-body-emphasis" href="/activities" wire:navigate.hover style="font-family: Campton;padding-right: 0px;">{{ __("Activities") }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-white);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z" fill="currentColor"></path>
                                </svg></a>
                            <div class="dropdown-menu dropdown-menu-end" style="padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a class="dropdown-item fw-light" href="/activities/extracurricular" wire:navigate.hover>{{ __("Extracurricular") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/activities/awards-achievements" wire:navigate.hover>{{ __("Awards & Achievements") }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a class="nav-link fs-5 link-body-emphasis" href="/admissions" wire:navigate.hover style="font-family: Campton;padding-right: 0px;">{{ __("Admissions") }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: var(--bs-white);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z" fill="currentColor"></path>
                                </svg></a>
                            <div class="dropdown-menu" style="padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a class="dropdown-item fw-light" href="/admissions/overview" wire:navigate.hover>{{ __("Admission Overview") }}</a>
                                <div class="dropdown-divider" style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div><a class="dropdown-item fw-light" href="/admissions/how-to-apply" wire:navigate.hover>{{ __("How to Apply") }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
