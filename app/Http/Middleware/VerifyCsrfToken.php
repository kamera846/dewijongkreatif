<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{

    protected $except = [
        'http://localhost:8000/register/store',
        'http://localhost:8000/dashboard/login',
        'http://localhost:8000/logout'
    ];
}
