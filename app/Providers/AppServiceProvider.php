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
        //commenting out my CSP implementation to re place it with composer package spatie/laravel-csp
        //added to share a nonce globally for CSP
        /* $nonce = base64_encode(random_bytes(16));
        View::share('nonce', $nonce); */
    }
}
