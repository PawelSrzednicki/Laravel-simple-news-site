<?php

namespace App\Providers;

use App\Categorie;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('partials.navbar', function ($view) 
        {
           $view->with('categories', Categorie::all());
        }
     );
    }
}
