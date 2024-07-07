<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Blade;

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
        //new nonce setup in app\Support\LaravelViteNonceGenerator.php
        //added to share a nonce globally for CSP
        /* $nonce = base64_encode(random_bytes(16));
        View::share('nonce', $nonce); */

        //debugging test for vite nonce
        //Vite::useCspNonce();


        // debugging theme switcher
        Blade::component('laravel-exceptions-renderer::icons.sun', 'laravel-exceptions-renderer-icons-sun');
        Blade::component('laravel-exceptions-renderer::icons.moon', 'laravel-exceptions-renderer-icons-moon');
        Blade::component('laravel-exceptions-renderer::icons.computer-desktop', 'laravel-exceptions-renderer-icons-computer-desktop');
    }
}
