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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function($user) {
            return $user->roles_id == 1;
        });
        Gate::define('redacteur', function($user) {
            return $user->roles_id == 3 || $user->roles_id == 1 || $user->roles_id == 2;
        });
        Gate::define('ceo', function($user) {
            return $user->roles_id == 4 || $user->roles_id == 1;
        });
        Gate::define('webmaster', function($user) {
            return $user->roles_id == 2 || $user->roles_id == 1;
        });
    }
}
