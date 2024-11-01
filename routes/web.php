<?php

use App\Livewire\Pages\Aboutus;
use App\Livewire\Pages\Academics;
use App\Livewire\Pages\EarlyYears;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Leadership;
use App\Livewire\Pages\Ourapproach;
use App\Livewire\Pages\Steam;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class);
Route::get("/aboutus", Aboutus::class);
Route::get("/aboutus/ourapproach", Ourapproach::class);
Route::get('/aboutus/leadership', Leadership::class);

Route::get('/steam', Steam::class);
Route::get("/academics", Academics::class);
Route::get('/academics/early-years', EarlyYears::class);



Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
