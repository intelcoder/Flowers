<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('App\Repositories\RepositoryInterface', function($app){
        return new Repository();
      });

      //$this->app->bind('App\Repositories\Repository', 'App\Controllers\Customers\CustomersController');
    }
}
