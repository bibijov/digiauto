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
        '/api/login',
        '/api/v1/autoskolas',
        '/api/kreirajkorisnika',
        '/api/v1/instruktors',
        'api/v1/korisniks',
        '/api/v1/users',
        '/api/v1/students',
        '/api/v1/kvizs',
        '/api/v1/upits',
        '/api/v1/upits/*'
    ];
}
