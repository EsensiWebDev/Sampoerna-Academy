<?php

use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get("/", Test::class);


Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
