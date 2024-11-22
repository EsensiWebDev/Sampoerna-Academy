<section style="margin-top: 200px; margin-bottom: 200px;" id="formSection">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Menampilkan pesan error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 col-lg-8 offset-lg-2">
                <div class="card"
                    style="border-radius: 15px; border-style: none; box-shadow: 0px 10px 20px rgba(96, 97, 112, 0.16), 0px 2px 5px rgba(40, 41, 61, 0.4);">
                    <div class="card-body" style="padding: 40px;">
                        <form action="/form" method="POST">
                            @csrf
                            {{-- Tampilkan pesan error --}}
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Parents Name') }}
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" name="parents_name" type="text" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Kids Name') }}
                                    <span class="text-danger">*</span></label>
                                <input class="form-control" name="kids_name" type="text" required>
                            </div>
                            <div class="d-flex flex-wrap mb-4">
                                <div class="flex-fill me-2">
                                    <label class="form-label"
                                        style="color: var(--bs-black); font-family: Campton;">{{ __('Phone Number') }}
                                        <span class="text-danger">*</span></label>
                                    <input class="form-control" name="phone_number" type="tel" required>
                                </div>
                                <div class="flex-fill ms-2">
                                    <label class="form-label"
                                        style="color: var(--bs-black); font-family: Campton;">Email
                                        <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email" type="email" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Province') }}
                                    <span class="text-danger">*</span></label>
                                <select class="form-select" name="province" required>
                                    <option value="" selected>{{ __('Choose one') }}</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Previous Curriculum') }}
                                    <span class="text-danger">*</span></label>
                                <select class="form-select" name="prev_curriculum" required>
                                    <option value="" selected>{{ __('Choose one') }}</option>
                                    <option value="item2">This is item 2</option>
                                    <option value="item3">This is item 3</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('School Choice') }}
                                    <span class="text-danger">*</span></label>
                                <select name="school_choice" class="form-select" required>
                                    <option value="" selected>{{ __('Choose one') }}</option>
                                    <option value="L’Avenue School">{{ __('L’Avenue School, Jakarta') }}</option>
                                    <option value="BSD School">{{ __('BSD School, South Tangerang') }}</option>
                                    <option value="Sentul School">{{ __('Sentul School, West Java') }}</option>
                                    <option value="Pakuwon Indah School">
                                        {{ __('Pakuwon Indah & Grand Pakuwon School, Surabaya') }}</option>
                                    <option value="Cipto School">{{ __('Cipto & Citra School, Medan') }}</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Grade Interested') }}</label>
                                <span class="text-danger">*</span>
                                <select class="form-select" name="grade_interested" required>
                                    <option value="">{{ __('Choose one') }}</option>
                                    <option value="Early Years">{{ __('Early Years') }}</option>
                                    <option value="Elementary School">{{ __('Elementary School') }}</option>
                                    <option value="Middle School">{{ __('Middle School') }}</option>
                                    <option value="High School">{{ __('High School') }}</option>
                                    <option value="Online School">{{ __('Online School') }}</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label"
                                    style="color: var(--bs-black); font-family: Campton;">{{ __('Timeframe Visit') }}
                                    <span class="text-danger">*</span></label>
                                <select class="form-select" name="timeframe_visit" required>
                                    <option value="" selected>{{ __('Choose one') }}</option>
                                    <option value="Within This Week">{{ __('Within This Week') }}</option>
                                    <option value="This Month">{{ __('This Month') }}</option>
                                    <option value="3 Months">{{ __('3 Months') }}</option>
                                </select>
                            </div>
                            {{-- @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif --}}
                            {{-- {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!} --}}
                            {{-- {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::display() !!} --}}
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit"
                                    style="border-style: none; border-radius: 12px; padding: 20px 40px; font-family: Campton; max-width: 320px;">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
