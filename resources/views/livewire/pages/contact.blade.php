<section id="contact">
    <section>
        <div class="d-flex align-items-end" style="height: 600px;background: url(&quot;assets/img/Banner/banner%20contact.webp&quot;) center / cover no-repeat;">
            <div class="container" style="padding-bottom: 64px;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: Campton;color: var(--bs-white);">{{ __("Contact") }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 200px; margin-bottom: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 offset-lg-2">
                    <h2 style="font-size: 50px; font-family: Campton; text-align: center;">{{ __("Share Your Thoughts") }}</h2>
                    <h4 style="font-size: 22px; font-family: Campton; text-aln:center; margin-top: 53px;">{{ __("We're here to listen! Whether you have questions, feedback, or simply want to learn more about Sampoerna Academy, we'd love to hear from you.") }}</h4>


                    <div class="card" style="border-radius: 15px;border-style: none;box-shadow: 0px 10px 20px rgba(96,97,112,0.16), 0px 2px 5px rgba(40,41,61,0.4); margin-top: 61px">
                        <div class="card-body" style="padding-left: 40px;padding-right: 40px;padding-top: 40px;padding-bottom: 40px;">
                            <form method="POST" action="/form">
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Parents Name") }}<span class="text-danger">*</span></label><input class="form-control" type="text"></div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Kids Name") }}<span class="text-danger">*</span></label><input class="form-control" type="text"></div>
                                <div class="d-flex flex-row" style="margin-bottom: 40px;">
                                    <div class="flex-fill" style="padding-right: 10px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Phone Number") }}<span class="text-danger">*</span></label><input class="form-control" type="tel"></div>
                                    <div class="flex-fill" style="padding-left: 10px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">Email<span class="text-danger">*</span></label><input class="form-control" type="email"></div>
                                </div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Province") }}<span class="text-danger">*</span></label><select class="form-select">
                                        <optgroup label="Province">
                                            <option value="12" selected="">{{ __("Chose one") }}</option>
                                            <option value="13">Jakarta</option>
                                            <option value="14">{{ __("South Tangerang") }}</option>
                                            <option value="">{{ __("West Java") }}</option>
                                            <option value="">{{ __("East Java") }}</option>
                                            <option value="">{{ __("North Sumatra") }}</option>
                                        </optgroup>
                                    </select></div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Previous Curriculume") }}<span class="text-danger">*</span></label><select class="form-select">
                                        <optgroup label="Province">
                                            <option value="12" selected="">{{ __("Chose one") }}</option>
                                            <option value="13">This is item 2</option>
                                            <option value="14">This is item 3</option>
                                        </optgroup>
                                    </select></div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("School Choice") }}<span class="text-danger">*</span></label><select class="form-select">
                                        <optgroup label="School Choice">
                                            <option value="12" selected="">{{ __("Chose one") }}</option>
                                            <option value="13">{{ __("L’Avenue School, Jakarta") }}</option>
                                            <option value="14">{{ __("BSD School, South Tangerang")  }}</option>
                                            <option value="">{{ __("Sentul School, West Java") }}</option>
                                            <option value="">{{ __("Pakuwon Indah & Grand Pakuwon School, Surabaya") }}</option>
                                            <option value="">{{ __("Cipto & Citra School, Medan") }}</option>
                                        </optgroup>
                                    </select></div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Grade Interested") }}</label><span class="text-danger">*</span><select class="form-select">
                                        <optgroup label="Grade Interested">
                                            <option value="12">{{ __("Chose one") }}</option>
                                            <option value="">{{ __("Early Years") }}</option>
                                            <option value="">{{ __("Elementary School") }}</option>
                                            <option value="">{{ __("Middle School") }}</option>
                                            <option value="">{{ __("High School") }}</option>
                                            <option value="">{{ __("Online School") }}</option>
                                        </optgroup>
                                    </select></div>
                                <div style="margin-bottom: 40px;"><label class="form-label" style="color: var(--bs-black);font-family: Campton;">{{ __("Timeframe Visit") }}<span class="text-danger">*</span></label><select class="form-select">
                                        <optgroup label="Timeframe Visit">
                                            <option value="12" selected="">{{ __("Chose one") }}</option>
                                            <option value="">{{ __("Within This Week") }}</option>
                                            <option value="">{{ __("This Month") }}</option>
                                            <option value="">{{ __("3 Months") }}</option>
                                        </optgroup>
                                    </select></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                                {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!}
                                {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::display() !!}

                                <div class="d-lg-flex justify-content-lg-end"><button class="btn btn-primary" type="button" style="border-style: none;border-radius: 12px;padding-left: 40px;padding-right: 40px;padding-top: 20px;padding-bottom: 20px;font-family: Campton;width: 320px;">{{ __("Submit") }}</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("components.footer-only")

</section>
