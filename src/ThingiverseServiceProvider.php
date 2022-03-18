<?php

namespace Dronki\Thingiverse;

use Illuminate\Support\ServiceProvider;

class ThingiverseServiceProvider extends ServiceProvider {
    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('thingiverse', function () {
            return new Thingiverse;
        });
    }
}
