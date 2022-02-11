<?php

namespace Ibnuhalimm\LaravelGoogleSheet;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class GoogleSheetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('google-sheet.php'),
            ], 'google-sheet-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'google-sheet');

        $this->app->bind(ConfigRepository::class, function () {
            return new ConfigRepository($this->app['config']['google-sheet']);
        });

        // Register the main class to use with the facade
        $this->app->singleton(Service::class, function (Application $app) {
            return new Service(
                $app->make(ConfigRepository::class)
            );
        });
    }
}
