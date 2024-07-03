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
            /* ->addDirective(Directive::DEFAULT, [
                'self'
            ]) */

            ->addDirective(Directive::SCRIPT, [
                'self'
            ])

            ->addNonceForDirective(Directive::SCRIPT)
            //nonce setup / vite integration in app\Support\LaravelViteNonceGenerator.php

            /* ->addDirective(Directive::STYLE, [
                'self'
            ]) */

            //->addNonceForDirective(Directive::STYLE)

            ->addDirective(Directive::FONT, [
                'https://fonts.bunny.net/'
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

        ;
    }
}