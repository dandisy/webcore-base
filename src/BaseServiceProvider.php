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
            __DIR__.'/app' => app_path(),
            __DIR__.'/routes' => base_path('routes'),         
            __DIR__.'/database' => base_path('database'),
            __DIR__.'/resources' => resource_path(),
            __DIR__.'/public' => public_path(),
        ], 'webcore');
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
