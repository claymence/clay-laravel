<?php

/* 
    Content Security Policy config for package spatie/laravel-csp
 */

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;

class ContentSecurityPolicy extends Policy
{
    /**
     * Configure the policy directives.
     */
    public function configure()
    {
        $this
            //default-src 'none' to only allow specified resources
            /* ->addDirective(Directive::DEFAULT, [
                'none'
            ]) */

            /* ->addDirective(Directive::SCRIPT, [
                'self'
            ]) */

            //->addNonceForDirective(Directive::SCRIPT)
            //nonce setup / vite integration in app\Support\LaravelViteNonceGenerator.php

            /* ->addDirective(Directive::STYLE, [
                'self',
                'https://fonts.bunny.net/'
            ]) */

            //->addNonceForDirective(Directive::STYLE)

            ->addDirective(Directive::FONT, [
                'https://fonts.bunny.net/',
                'https://cdn.jsdelivr.net/gh/devicons/'
            ])

            ->addDirective(Directive::FORM_ACTION, [
                'self'
            ])

            ->addDirective(Directive::OBJECT, [
                'none'
            ])

            ->addDirective(Directive::FRAME, [
                'none'
            ])

            ->addDirective(Directive::FRAME_ANCESTORS, [
                'none'
            ])

            ->addDirective(Directive::BASE, [
                'self'
            ])

            /* 
                directives to check

                BLOCK_ALL_MIXED_CONTENT
                PLUGIN
                REQUIRE_TRUSTED_TYPES_FOR
                UPGRADE_INSECURE_REQUESTS
                
            */

        ;
    }
}
