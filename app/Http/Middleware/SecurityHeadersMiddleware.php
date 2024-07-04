<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeadersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('X-Frame-Options', 'DENY');

        $response->headers->set('X-Content-Type-Options', 'nosniff');

        $response->headers->set('Referrer-Policy', 'no-referrer');

        $response->headers->set('Cross-Origin-Resource-Policy', 'same-origin'); // or 'same-site' or 'cross-origin'

        //commenting out my CSP implementation to re place it with composer package spatie/laravel-csp
        //new CSP setup in app\Policies\ContentSecurityPolicy.php
        //new nonce setup in app\Support\LaravelViteNonceGenerator.php
        //nonce globally shared from app\Providers\AppServiceProvider.php
        /* $nonce = View::shared('nonce'); */

        /* $response->headers->set(
            'Content-Security-Policy', 
            "default-src 'self' 'nonce-$nonce'; script-src 'self' 'nonce-$nonce'; style-src 'self' 'nonce-$nonce'; font-src 'self' 'nonce-$nonce' https://fonts.bunny.net/; object-src 'none'; frame-ancestors 'none'; form-action 'self'"
        ); */

        /* $response->headers->set(
            'Content-Security-Policy', 
            "font-src 'self' 'nonce-$nonce' https://fonts.bunny.net/; object-src 'none'; frame-ancestors 'none'; form-action 'self'"
        ); */

        return $response;
    }
}
