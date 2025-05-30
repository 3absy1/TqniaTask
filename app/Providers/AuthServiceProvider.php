<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('withdraw-request', fn($user) => $user->hasPermission('withdraw-request'));
        Gate::define('approve-withdrawal', fn($user) => $user->hasPermission('approve-withdrawal'));
        Gate::define('approve-topup', fn($user) => $user->hasPermission('approve-topup'));
    }
}
