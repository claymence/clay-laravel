<?php

use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\SecurityHeadersMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Csp\AddCspHeaders;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        // role middleware for permission checks
        $middleware->alias(['role' => RoleMiddleware::class]);

        // Append / prepend SecurityHeadersMiddleware to run on every HTTP request
        // use append() or prepend() ?
        $middleware->prepend(SecurityHeadersMiddleware::class);

        // Add CSP Headers middleware from package spatie/laravel-csp
        $middleware->prepend(AddCspHeaders::class);

    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
