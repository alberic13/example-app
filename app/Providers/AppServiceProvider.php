<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ExcelServiceProvider will be registered through composer.json
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
