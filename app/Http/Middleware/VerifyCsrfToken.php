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
        'ganb/api/auth/v1/token',
        'ganb/api/corporation/v1/va/issue',
        '/ganb/api/webhooks/v1/subscribe',
        '/ganb/api/corporation/v1/transfer/transferfee',
        '/ganb/api/corporation/v1/transfer/request'
    ];
}
