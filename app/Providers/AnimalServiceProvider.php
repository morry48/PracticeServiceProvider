<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AnimalServiceProvider extends ServiceProvider
{
    /**
    /**
     * Register the Bird class instance to the container.
     * Food class will be auto injected
     */
    public function register() {
        app()->bind('App\Animal\AnimalInterface', 'App\Services\Cat');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
