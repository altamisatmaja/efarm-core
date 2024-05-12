<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'https://2edd-140-213-118-85.ngrok-free.app/checkout/callback',
        'https://2edd-140-213-118-85.ngrok-free.app/api/checkout/callback/test'
    ];
}
