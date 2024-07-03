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
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Configure the policy directives.
     */
    public function configure()
    {
        $this
            ->addDirective(Directive::FONT, ['https://fonts.bunny.net/'])
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::OBJECT, 'none')
            ->addDirective(Directive::FRAME, 'none')
        ;
    }
}
