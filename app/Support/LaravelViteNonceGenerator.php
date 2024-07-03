<?php

namespace App\Support;

use Illuminate\Support\Facades\Vite;

class LaravelViteNonceGenerator
{
    public function generate(): string
    {
        return Vite::useCspNonce();
    }
}
