<?php

namespace Dilumdarshana\Laragrid;

use Illuminate\Support\ServiceProvider;

class DatagridServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        // Second parameter is namespace
        $this->loadViewsFrom(__DIR__.'/Views', 'Dilumdarshana');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind controller to container
        $this->app->make('Dilumdarshana\Laragrid\Controllers\DatagridController');
    }
}
