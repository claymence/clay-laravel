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

        /* 
            defined middleware below with alias for use in routes\web.php
         */

        // for access control, checks permissions attached to the users role
        $middleware->alias(['role' => RoleMiddleware::class]);

        /* 
            defined middleware below with append / prepend to run on every HTTP request
         */

        // HTTP headers for security
        $middleware->prepend(SecurityHeadersMiddleware::class);

        // CSP defined in app\Policies\ContentSecurityPolicy.php utilizing package spatie/laravel-csp
        $middleware->prepend(AddCspHeaders::class);

    })

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
