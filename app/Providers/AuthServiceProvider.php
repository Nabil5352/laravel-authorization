<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        Gate::define('is_system_admin', function($user){
            return $user->role == 0;
        });

        Gate::define('is_business_admin', function($user){
            return $user->role == 1;
        });


        Gate::define('is_channel_owner', function($user){
            return $user->role == 2;
        });


        Gate::define('is_customer', function($user){
            return $user->role == 3;
        });
    }
}
