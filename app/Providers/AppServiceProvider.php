<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $provincesJson = file_get_contents(public_path('assets/json/province.json'));
            $provinces = json_decode($provincesJson, true);

            $view->with('provinces', $provinces);
        });
    }
}
