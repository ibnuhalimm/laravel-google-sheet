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
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'google-sheet');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'google-sheet');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('google-sheet.php'),
            ], 'google-sheet-config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/google-sheet'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/google-sheet'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/google-sheet'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
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
