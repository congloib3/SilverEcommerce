<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;


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
        //
        view()->composer('layout', function($view){
            $view->with('categories', Category::where('status', 1)->orderBy('id', 'asc')->get());
        });
    }
}
