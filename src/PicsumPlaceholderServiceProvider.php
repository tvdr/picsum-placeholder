<?php

namespace Tvdr\PicsumPlaceholder;

use Illuminate\Support\ServiceProvider;

class PicsumPlaceholderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('picsum-placeholder.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/picsum-placeholder'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/picsum-placeholder'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/picsum-placeholder'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        require_once __DIR__ . '/PicsumPlaceholderHelper.php';
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'picsum-placeholder');

        // Register the main class to use with the facade
        $this->app->bind('picsum-placeholder', function () {
            return new PicsumPlaceholder;
        });
    }
}
