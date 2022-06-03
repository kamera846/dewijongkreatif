<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isSuperAdmin', function () {
            $userRole = Auth::user()->role;
            return $userRole === 'Super-admin';
        });
        Gate::define('isAdmin', function () {
            $userRole = Auth::user()->role;
            return $userRole === 'admin';
        });
        //
    }
}
