<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

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

        //nonce globally shared from app\Providers\AppServiceProvider.php
        $nonce = View::shared('nonce');

        $response->headers->set('X-Frame-Options', 'DENY');

        //$response->headers->set('Content-Security-Policy', "default-src 'self' 'nonce-$nonce'; script-src 'self' 'nonce-$nonce'; style-src 'self' 'nonce-$nonce'; font-src 'self' 'nonce-$nonce' https://fonts.bunny.net/; object-src 'none'; frame-ancestors 'none'");
        
        $response->headers->set(
            'Content-Security-Policy', 
            "font-src 'self' 'nonce-$nonce' https://fonts.bunny.net/; object-src 'none'; frame-ancestors 'none'"
            );

        return $response;
    }
}
