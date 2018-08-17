<?php

namespace Webcore\Base;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views', 'base');

        $this->publishes([
            __DIR__.'/config' => config_path(),
        ], 'config');

        $this->publishes([
            __DIR__.'/app' => app_path(),
        ], 'app');

        $this->publishes([
            __DIR__.'/database/migrations' => base_path('database/migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/resources' => resource_path(),
        ], 'resources');

        $this->publishes([
            __DIR__.'/public' => public_path(),
        ], 'public');

        $this->publishes([
            __DIR__.'/database/seeds' => base_path('database/seeds'),
        ], 'webcore-seeds');

        $this->publishes([
            __DIR__.'/app/User.php' => app_path('User.php'),
        ], 'webcore-user');

        $this->publishes([
            __DIR__.'/routes' => base_path('routes'),
        ], 'webcore-route');

        $this->publishes([
            __DIR__.'/config' => config_path(),
            __DIR__.'/app' => app_path(),
            __DIR__.'/database/migrations' => base_path('database/migrations'),
            __DIR__.'/resources' => resource_path(),
            __DIR__.'/public' => public_path(),
        ], 'webcore');

        $this->publishes([
            __DIR__.'/database/seeds' => base_path('database/seeds'),
            __DIR__.'/app/User.php' => app_path('User.php'),
            __DIR__.'/routes' => base_path('routes'),
        ], 'webcore-override');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
