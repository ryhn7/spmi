<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
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

        //
        Auth::resolved(function ($auth) {
            $auth->extend('custom_guard', function ($app, $name, array $config) {
                $guard = new \Illuminate\Auth\SessionGuard($name, Auth::createUserProvider($config['provider']), $app['session.store']);

                // Customize the guard behavior based on the guard name
                if ($name === 'tpmf') {
                    // Modify the guard behavior for 'tpmf' guard
                    // Example: Set a custom user provider
                    $guard->setProvider(Auth::createUserProvider('custom_tpmf_provider'));
                } elseif ($name === 'dekan') {
                    // Example: Set a different user provider
                    $guard->setProvider(Auth::createUserProvider('custom_dekan_provider'));
                } elseif ($name === 'gpm') {
                    // Example: Set a different user provider
                    $guard->setProvider(Auth::createUserProvider('custom_gpm_provider'));
                } elseif ($name === 'wadek') {
                    // Modify the guard behavior for 'wadek' guard
                    // Example: Set a different user provider
                    $guard->setProvider(Auth::createUserProvider('custom_wadek_provider'));
                } elseif ($name === 'kaprodi') {
                    $guard->setProvider(Auth::createUserProvider('custom_kaprodi_provider'));
                }

                return $guard;
            });
        });
    }
}
