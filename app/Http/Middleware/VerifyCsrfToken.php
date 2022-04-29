<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{

    protected $except = [
        'http://localhost:8000/register/store',
        'http://localhost:8000/login',
        'http://localhost:8000/logout',
        'http://localhost:8000/user/1/editprofile',
        'http://localhost:8000/user/1/updateprofile',
        'http://localhost:8000/user/3/update',
        'http://localhost:8000/blog/6/update',
        'http://localhost:8000/blog/store'
    ];
}
