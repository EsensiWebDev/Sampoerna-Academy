<?php

use App\Http\Controllers\FormController;
use App\Livewire\Pages\Aboutus;
use App\Livewire\Pages\Academics;
use App\Livewire\Pages\Activities;
use App\Livewire\Pages\Admissions;
use App\Livewire\Pages\AwardsAchievements;
use App\Livewire\Pages\BsdSchool;
use App\Livewire\Pages\Calendar;
use App\Livewire\Pages\Carrer;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\DetailArticle;
use App\Livewire\Pages\EarlyYears;
use App\Livewire\Pages\Extracurricular;
use App\Livewire\Pages\Faq;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\HowToApply;
use App\Livewire\Pages\LavenueSchools;
use App\Livewire\Pages\Leadership;
use App\Livewire\Pages\MedanSchool;
use App\Livewire\Pages\News;
use App\Livewire\Pages\Ourapproach;
use App\Livewire\Pages\Ourschools;
use App\Livewire\Pages\OverviewAdmissions;
use App\Livewire\Pages\SentulSchool;
use App\Livewire\Pages\Steam;
use App\Livewire\Pages\SurabayaSchool;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::post('/form', [FormController::class, 'submit']);
Route::get("/", Home::class);
Route::get("/aboutus", Aboutus::class);
Route::get("/aboutus/ourapproach", Ourapproach::class);
Route::get('/aboutus/leadership', Leadership::class);

Route::get('/steam', Steam::class);
Route::get("/academics", Academics::class);
Route::get('/academics/early-years', EarlyYears::class);
Route::get('/academics/elementary-school', \App\Livewire\Pages\ElementarySchool::class);
Route::get('/academics/middle-school', \App\Livewire\Pages\MiddleSchool::class);
Route::get('/academics/high-school', \App\Livewire\Pages\HighSchool::class);
Route::get('/academics/online-school', \App\Livewire\Pages\OnlineSchool::class);
Route::get("/academics/calendars", Calendar::class);
Route::get("/ourschools", Ourschools::class);
Route::get("/ourschools/lavenue", LavenueSchools::class);
Route::get('/ourschools/bsd', BsdSchool::class);
Route::get('/ourschools/sentul', SentulSchool::class);
Route::get('/ourschools/surabaya', SurabayaSchool::class);
Route::get('/ourschools/medan', MedanSchool::class);

Route::get("/activities", Activities::class);
Route::get('/activities/extracurricular', Extracurricular::class);
Route::get('/activities/awards-achievements', AwardsAchievements::class);
Route::get('/admissions', Admissions::class);
Route::get("/admissions/overview", OverviewAdmissions::class);
Route::get("/admissions/how-to-apply", HowToApply::class);
Route::get("/career", Carrer::class);
Route::get("/news", News::class);
Route::get('/contact', Contact::class);
Route::get("/faq", Faq::class);

Route::get("/news/{slug}", DetailArticle::class)->name("read-article");

Route::get("/login", function () {
    \Illuminate\Support\Facades\Auth::attempt([
        "email" => "admin@gmail.com",
        "password" => "admin"
    ]);
})->name("login");


// Redirect Area

Route::get('/id/tentang-kami', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/aboutus', 301); // 301 untuk redirect permanen

});
Route::get('/id/sekolah-menengah-atas', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/academics/high-school', 301); // 301 untuk redirect permanen

});
Route::get('id/kampus-lavenue/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/ourschools/lavenue', 301); // 301 untuk redirect permanen

});
Route::get('id/karir/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/career', 301); // 301 untuk redirect permanen

});
Route::get('id/beranda/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/', 301); // 301 untuk redirect permanen

});
Route::get('/id/penerimaan-siswa-sampoerna-academy/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/admissions/overview', 301); // 301 untuk redirect permanen

});
Route::get('id/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/', 301); // 301 untuk redirect permanen

});
Route::get('id/kampus-bsd/', function () {
    // app()->setLocale("id");
    session()->put('locale', "id");
    return redirect('/ourschools/bsd', 301); // 301 untuk redirect permanen

});


Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
