<?php

namespace Vendor\PackageName\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register helper file
        require_once __DIR__.'/../Helpers/helpers.php';

        // Merge config
        $this->mergeConfigFrom(__DIR__.'/../../config/package.php', 'package');
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'package');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        // Publish configuration
        $this->publishes([
            __DIR__.'/../../config/package.php' => config_path('package.php'),
        ], 'config');

        // Publish views
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/package'),
        ], 'views');
    }
}
