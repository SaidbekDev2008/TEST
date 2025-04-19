<?php

namespace App\Providers;

use App\Models\Teacher;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('components.layouts.teachers', function ($view) {
            $view->with('teachers', Teacher::get());
        });
    }
}
