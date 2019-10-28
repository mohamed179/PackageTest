<?php

namespace Mohamed\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // loading routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // registering views
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Mohamed\Calculator\CalculatorController');
    }
}
