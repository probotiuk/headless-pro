<?php

namespace Probotiuk\HeadlessPro\Providers;

use Illuminate\Support\ServiceProvider;
use Probotiuk\HeadlessPro\Console\Commands\CollectionCommand;

class HeadlessProServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/headless-pro.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'headless-pro');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/headless-pro'),
        ]);

        $this->publishes([
            __DIR__.'/../config/headless-pro.php' => config_path('headless-pro.php')
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                CollectionCommand::class,
            ]);
        }
    }
}
