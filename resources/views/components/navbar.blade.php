@php
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Str;
@endphp
<nav class="d-none d-md-block navbar navbar-expand-md fixed-top" style="padding-top: 24px;padding-bottom: 24px;"
    data-bs-theme="dark">
    <div class="container"><a class="navbar-brand" href="/"
            style="background: url({{ asset('assets/img/Logo/Logo%20Sampoerna%20Academy.webp') }}) center / contain no-repeat;width: 228px;height: 93.82px;margin-right: 0px;padding-bottom: 0px;padding-top: 0px;"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"
            style="border-style: none;border-radius: 0px;"><span class="visually-hidden">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <div class="ms-auto">
                @php
                    $isCareer = Str::startsWith(request()->path(), 'career');
                    $isNews = Str::startsWith(request()->path(), 'news');
                    $isContact = Str::startsWith(request()->path(), 'contact');
                    $isFaq = Str::startsWith(request()->path(), 'faq');
                @endphp
                <ul class="navbar-nav d-md-flex d-lg-flex ms-auto justify-content-md-end justify-content-lg-end">
                    <li class="nav-item" style="font-family: Campton;"><a
                            class="nav-link fw-normal link-body-emphasis {{ $isCareer ? 'link-active' : '' }}"
                            href="/career"
                            style=" color: var(--bs-white);font-family:
                            Campton;">{{ __('Career') }}</a>
                    </li>
                    <li class="nav-item" style="font-family: Campton;"><a
                            class="nav-link fw-normal link-body-emphasis {{ $isNews ? 'link-active' : '' }}"
                            href="/news"
                            style=" color: var(--bs-white);font-family:
                            Campton;">{{ __('News') }}</a>
                    </li>
                    <li class="nav-item" style="font-family: Campton;"><a
                            class="nav-link fw-normal link-body-emphasis {{ $isContact ? 'link-active' : "$isContact" }}"
                            href="/contact"
                            style=" color: var(--bs-white);font-family:
                            Campton;">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item" style="font-family: Campton;"><a
                            class="nav-link fw-normal link-body-emphasis {{ $isFaq ? 'link-active' : "$isFaq" }}"
                            href="/faq"
                            style=" color: var(--bs-white);font-family:
                            Campton;">{{ __('FAQ') }}</a>
                    </li>
                    <li class="nav-item dropdown" style="font-family: Campton;">
                        <a class="nav-link fw-normal link-body-emphasis dropdown-toggle" href="#"
                            id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="color: var(--bs-white);font-family: Campton;">
                            @php
                                $currentLocale = app()->getLocale();
                                $flagImage = $currentLocale == 'id' ? 'circle-flags_id.webp' : 'United-Kingdom.png';
                                $languageText = $currentLocale == 'id' ? 'Bahasa Indonesia' : 'English';
                            @endphp
                            <img src="{{ asset("assets/img/Flag/$flagImage") }}" width="26" height="20"
                                style="width: 20px;">&nbsp;{{ $languageText }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="/language/en">
                                    <img src="{{ asset('assets/img/Flag/United-Kingdom.png') }}" width="26"
                                        height="20" style="width: 20px;">&nbsp;English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/language/id">
                                    <img src="{{ asset('assets/img/Flag/circle-flags_id.webp') }}"
                                        style="width: 20px;">&nbsp;Bahasa
                                    Indonesia
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @php
                    $isAboutUs = Str::startsWith(request()->path(), 'aboutus');
                @endphp
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a
                            class="nav-link fs-5 link-body-emphasis {{ $isAboutUs ? 'link-active' : '' }}"
                            href="/aboutus" style="font-family: Campton;padding-right: 0px;">{{ __('aboutUs') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5 link-body-emphasis"
                                aria-expanded="false" data-bs-toggle="dropdown" href="aboutus.html"
                                style="color: var(--bs-white);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu" style="padding-left: 8px;padding-right: 8px;border-radius: 0px;">
                                <a class="dropdown-item fw-light"
                                    href="/aboutus/ourapproach">{{ __('Our Approach') }}</a>
                                <div class="dropdown-divider"
                                    style="border-width: 1px;border-color: rgb(0,0,0);margin-left: 14px;margin-right: 14px;">
                                </div>
                                <a class="dropdown-item fw-light" href="/aboutus/leadership">{{ __('Leadership') }}</a>
                            </div>
                        </div>
                    </li>
                    @php
                        $isSteam = Str::startsWith(request()->path(), 'steam');
                    @endphp
                    <li class="nav-item" style="font-family: Campton;"><a
                            class="nav-link fs-5 link-body-emphasis {{ $isSteam ? 'link-active' : '' }}" href="/steam"
                            style="color: var(--bs-white);">{{ __('steam') }}</a></li>

                    @php
                        $isAcademic = Str::startsWith(request()->path(), 'academics');
                    @endphp
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a
                            class="nav-link fs-5 link-body-emphasis {{ $isAcademic ? 'link-active' : '' }}"
                            href="/academics"
                            style="font-family: Campton;padding-right: 0px;">{{ __('academics') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a
                                class="fs-5 link-body-emphasis" aria-expanded="false" data-bs-toggle="dropdown"
                                href="academics.html" style="color: var(--bs-white);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu"
                                style="padding-top: 8px;padding-bottom: 8px;padding-left: 8px;padding-right: 8px;border-radius: 0px;">
                                <a class="dropdown-item fw-light"
                                    href="/academics/early-years">{{ __('Early Years') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/academics/elementary-school">{{ __('Elementary School') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/academics/middle-school">{{ __('Middle School') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/academics/high-school">{{ __('High School') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/academics/online-school">{{ __('Online School') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/academics/calendars">{{ __('Calendars') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="https://library.sampoernaacademy.sch.id/">{{ __('Library') }}</a>
                            </div>
                        </div>
                    </li>
                    @php
                        $isOurSchools = Str::startsWith(request()->path(), 'ourschools');
                    @endphp
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a
                            class="nav-link fs-5 link-body-emphasis {{ $isOurSchools ? 'link-active' : '' }}"
                            href="/ourschools"
                            style="font-family: Campton;padding-right:
                            0px;">{{ __('Our Schools') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                style="color: var(--bs-white);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu"
                                style="padding-left: 8px;padding-right: 8px;border-radius: 0px;">
                                <a class="dropdown-item fw-light"
                                    href="/ourschools/lavenue">{{ __('L’Avenue School') }}</a>
                                <div class="dropdown-divider"
                                    style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div>
                                <a class="dropdown-item fw-light" href="/ourschools/bsd">{{ __('BSD School') }}</a>
                                <div class="dropdown-divider"
                                    style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div>
                                <a class="dropdown-item fw-light"
                                    href="/ourschools/sentul">{{ __('Sentul School') }}</a>
                                <div class="dropdown-divider"
                                    style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div>
                                <a class="dropdown-item fw-light"
                                    href="/ourschools/surabaya">{{ __('Surabaya School') }}</a>
                                <div class="dropdown-divider"
                                    style="border-width: 1px;border-color: rgb(0,0,0);margin: 8px 14px;"></div>
                                <a class="dropdown-item fw-light"
                                    href="/ourschools/medan">{{ __('Medan School') }}</a>
                            </div>
                        </div>
                    </li>
                    @php
                        $isActivities = Str::startsWith(request()->path(), 'activities');
                    @endphp
                    <li class="nav-item d-flex flex-row align-items-xxl-center">
                        <a class="nav-link fs-5 link-body-emphasis {{ $isActivities ? 'link-active' : '' }}"
                            href="/activities"
                            style=" font-family: Campton;padding-right: 0px;">{{ __('Activities') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                style="color: var(--bs-white);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end"
                                style="padding-left: 8px;padding-right: 8px;border-radius: 0px;"><a
                                    class="dropdown-item fw-light"
                                    href="/activities/extracurricular">{{ __('Extracurricular') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/activities/awards-achievements">{{ __('Awards & Achievements') }}</a>
                            </div>
                        </div>
                    </li>
                    @php
                        $isAdmissions = Str::startsWith(request()->path(), 'admissions');
                    @endphp
                    <li class="nav-item d-flex flex-row align-items-xxl-center"><a
                            class="nav-link fs-5 link-body-emphasis {{ $isAdmissions ? 'link-active' : '' }}"
                            href="/admissions"
                            style=" font-family: Campton;padding-right: 0px;">{{ __('Admissions') }}</a>
                        <div class="nav-item dropdown" style="font-family: Campton;"><a class="fs-5"
                                aria-expanded="false" data-bs-toggle="dropdown" href="#"
                                style="color: var(--bs-white);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="none">

                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu"
                                style="padding-left: 8px;padding-right: 8px;border-radius: 0px;">
                                <a class="dropdown-item fw-light"
                                    href="/admissions/overview">{{ __('Admission Overview') }}</a>
                                <div class="dropdown-divider"
                                    style="margin: 8px 14px;border-width: 1px;border-color: rgb(0,0,0);"></div>
                                <a class="dropdown-item fw-light"
                                    href="/admissions/how-to-apply">{{ __('How to Apply') }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<nav class="navbar d-sm-block d-md-none navbar-expand-md fixed-top" style="padding-top: 24px; padding-bottom: 24px;"
    data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/"
            style="background: url({{ asset('assets/img/Logo/Logo%20Sampoerna%20Academy.webp') }}) center / contain no-repeat; width: 228px; height: 93.82px; margin-right: 0; padding: 0;"></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"
            style="border-style: none; border-radius: 0;" aria-controls="navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <!-- Accordion for mobile -->
            <div class="d-md-none">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <!-- Tautan ke /aboutus -->
                            <a class="nav-link fs-5 link-body-emphasis" href="/aboutus"
                                style="color: var(--bs-white);">
                                {{ __('About Us') }}
                            </a>
                            <!-- Icon untuk membuka dropdown -->
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="aboutUsButton"
                                data-bs-toggle="collapse" data-bs-target="#aboutUsAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <!-- Dropdown Accordion -->
                        <div class="collapse" id="aboutUsAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/aboutus/ourapproach"
                                    style="color: var(--bs-white);">{{ __('Our Approach') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/aboutus/leadership"
                                    style="color: var(--bs-white);">{{ __('Leadership') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="https://sites.google.com/sampoernauniversity.net/sustaffcouncil/home"
                                    style="color: var(--bs-white);">{{ __('Staff Council') }}</a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <a class="nav-link fs-5 link-body-emphasis" id="academicsButton"
                                href="/academics">{{ __('Academics') }}</a>
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="academicsButtonIcon"
                                data-bs-toggle="collapse" data-bs-target="#academicsAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse" id="academicsAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/academics/early-years"
                                    style="color: var(--bs-white);">{{ __('Early Years') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/academics/elementary-school"
                                    style="color: var(--bs-white);">{{ __('Elementary School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/academics/middle-school"
                                    style="color: var(--bs-white);">{{ __('Middle School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/academics/high-school"
                                    style="color: var(--bs-white);">{{ __('High School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/academics/online-school"
                                    style="color: var(--bs-white);">{{ __('Online School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/academics/calendars"
                                    style="color: var(--bs-white);">{{ __('Calendars') }}</a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <a class="nav-link fs-5 link-body-emphasis" id="ourSchoolsButton"
                                href="/ourschools">{{ __('Our Schools') }}</a>
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="ourSchoolsButtonIcon"
                                data-bs-toggle="collapse" data-bs-target="#ourSchoolsAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse" id="ourSchoolsAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/ourschools/lavenue"
                                    style="color: var(--bs-white);">{{ __('L’Avenue School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/ourschools/bsd"
                                    style="color: var(--bs-white);">{{ __('BSD School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/ourschools/sentul"
                                    style="color: var(--bs-white);">{{ __('Sentul School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/ourschools/surabaya"
                                    style="color: var(--bs-white);">{{ __('Surabaya School') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/ourschools/medan"
                                    style="color: var(--bs-white);">{{ __('Medan School') }}</a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <a class="nav-link fs-5 link-body-emphasis" id="activitiesButton"
                                href="/activities">{{ __('Activities') }}</a>
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="activitiesButtonIcon"
                                data-bs-toggle="collapse" data-bs-target="#activitiesAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse" id="activitiesAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/activities/extracurricular"
                                    style="color: var(--bs-white);">{{ __('Extracurricular') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/activities/awards-achievements"
                                    style="color: var(--bs-white);">{{ __('Awards & Achievements') }}</a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <a class="nav-link fs-5 link-body-emphasis" id="admissionsButton"
                                href="/admissions">{{ __('Admissions') }}</a>
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="admissionsButtonIcon"
                                data-bs-toggle="collapse" data-bs-target="#admissionsAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse" id="admissionsAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/admissions/overview"
                                    style="color: var(--bs-white);">{{ __('Admission Overview') }}</a>
                                <a class="dropdown-item fw-light mt-2" href="/admissions/how-to-apply"
                                    style="color: var(--bs-white);">{{ __('How to Apply') }}</a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                    <li class="nav-item"><a
                            class="nav-link fw-normal link-body-emphasis {{ Str::startsWith(request()->path(), 'career') ? 'link-active' : '' }}"
                            href="/career">{{ __('Career') }}</a></li>
                    <li class="nav-item"><a
                            class="nav-link fw-normal link-body-emphasis {{ Str::startsWith(request()->path(), 'news') ? 'link-active' : '' }}"
                            href="/news">{{ __('News') }}</a></li>
                    <li class="nav-item"><a
                            class="nav-link fw-normal link-body-emphasis {{ Str::startsWith(request()->path(), 'contact') ? 'link-active' : '' }}"
                            href="/contact">{{ __('Contact') }}</a></li>
                    <li class="nav-item"><a
                            class="nav-link fw-normal link-body-emphasis {{ Str::startsWith(request()->path(), 'faq') ? 'link-active' : '' }}"
                            href="/faq">{{ __('FAQ') }}</a></li>


                    <li class="nav-item">
                        <div class="d-flex flex-row align-items-start justify-content-start">
                            <!-- Tautan untuk dropdown bahasa -->
                            <a class="nav-link fw-normal link-body-emphasis" id="languageDropdownButton"
                                data-bs-toggle="collapse" data-bs-target="#languageAccordion" aria-expanded="false"
                                style="cursor: pointer;">
                                @php
                                    $currentLocale = app()->getLocale();
                                    $flagImage = $currentLocale == 'id' ? 'circle-flags_id.webp' : 'United-Kingdom.png';
                                    $languageText = $currentLocale == 'id' ? 'Bahasa Indonesia' : 'English';
                                @endphp
                                <img src="{{ asset("assets/img/Flag/$flagImage") }}"
                                    style="width: 20px;">&nbsp;{{ $languageText }}
                            </a>
                            <a class="nav-link fs-5 link-body-emphasis ms-2" id="languageButtonIcon"
                                data-bs-toggle="collapse" data-bs-target="#languageAccordion" aria-expanded="false"
                                style="color: var(--bs-white); cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.29289 7.29289C5.68342 6.90237 6.31658 6.90237 6.70711 7.29289L10 10.5858L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L10.7071 12.7071C10.3166 13.0976 9.68342 13.0976 9.29289 12.7071L5.29289 8.70711C4.90237 8.31658 4.90237 7.68342 5.29289 7.29289Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <!-- Dropdown Accordion -->
                        <div class="collapse" id="languageAccordion">
                            <div class="card card-body"
                                style="background-color: transparent; color:white; border:none;">
                                <a class="dropdown-item fw-light mt-2" href="/language/en"
                                    style="color: var(--bs-white);">
                                    <img width="26" height="26"
                                        src="{{ asset('assets/img/Flag/United-Kingdom.png') }}"
                                        style="width: 20px;">&nbsp;English
                                </a>
                                <a class="dropdown-item fw-light mt-2" href="/language/id"
                                    style="color: var(--bs-white);">
                                    <img width="26" height="26"
                                        src="{{ asset('assets/img/Flag/circle-flags_id.webp') }}"
                                        style="width: 20px;">&nbsp;Bahasa
                                    Indonesia
                                </a>
                            </div>
                        </div>
                        <hr class="mobile-divider"> <!-- Divider -->
                    </li>

                </ul>
            </div>

        </div>
    </div>

    <style>
        /* Add mobile-specific CSS here */
        @media (max-width: 768px) {

            /* Adjust max-width as needed */
            .navbar {
                background-color: transparent;
                /* Warna default transparan */
                transition: background-color 0.3s ease;
                /* Efek transisi */
            }

            .navbar {
                /* Mobile-specific styles */
            }

            .navbar-collapse {
                height: 100vh !important;
            }

            .navbar.cg-bg {
                background-color: #292F78;
                /* Warna saat toggle diklik */
            }

            .mobile-divider {
                border: none;
                border-top: 1px solid white;
                /* Set warna pemisah */
                margin: 0;
                /* Hapus default margin */
            }

            .navbar.scrolled {
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                /* Efek shadow saat scrolled */
                background-color: rgba(0, 0, 0.2, 0.4);
                /* Sedikit warna putih saat di-scroll */
            }
        }
    </style>

    <script>
        document.addEventListener('livewire:navigated', () => {
            // Function that runs when the window is resized
            function checkViewport() {
                if ($(window).width() <= 768) { // Adjust based on your bootstrap breakpoints
                    $('.navbar-toggler').click(function() {
                        $('.navbar').removeClass('scrolled');
                        $('.navbar').toggleClass('cg-bg'); // Adding or removing class 'cg-bg'
                    });

                    // Setting scroll effect
                    $(window).scroll(function() {
                        // Check if collapse is not active
                        if (!$('.navbar-collapse').hasClass('show')) {
                            if ($(this).scrollTop() > 50) { // Detect scroll more than 50px
                                $('.navbar').addClass('scrolled'); // Add class 'scrolled'
                            } else {
                                $('.navbar').removeClass('scrolled'); // Remove class 'scrolled'
                            }
                        }
                    });
                } else {
                    // Remove event handlers for larger sizes
                    $(window).off("scroll");
                }
            }

            // Run on load and resize
            checkViewport();
            $(window).resize(checkViewport); // Re-check on resize
        });
    </script>
</nav>
