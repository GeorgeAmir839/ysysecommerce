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
        Gate::define('asadmin',function($user){
            return $user->role == 'admin';
            //vypodalyho@mailinator.
        });
        Gate::define('asuser',function($user){
            return $user->role == 'user';
        });
        $this->registerPolicies();
        Gate::define('assuperadmin',function($user){
            return $user->role == 'superadmin';
            //vypodalyho@mailinator.
        });
        Gate::define('asgest',function($user){
            return $user->role == 'gest';
        });
    }
}
