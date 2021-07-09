<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        GATE::define('is-admin', function ($user) {
            return $user->hasAnyRole('admin');
        });

        GATE::define('is-author', function ($user) {
            return $user->hasAnyRole('author');
        });

        GATE::define('is-user', function ($user) {
            return $user->hasAnyRole('user');
        });
    }
}
