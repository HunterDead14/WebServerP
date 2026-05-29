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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \App\Models\BlogPost::observe(\App\Observers\BlogPostObserver::class);
        \App\Models\BlogCategory::observe(\App\Observers\BlogCategoryObserver::class);
    }
}
