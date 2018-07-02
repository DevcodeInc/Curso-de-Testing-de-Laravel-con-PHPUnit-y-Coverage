<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CategoriaModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         \App\Categoria::observe(\App\Observers\CategoriaObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
