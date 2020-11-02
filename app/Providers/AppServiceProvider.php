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
            $view->with('silvers', Category::where('commodity_id', 1)->orderBy('id', 'asc')->get())
                 ->with('watchs', Category::where('commodity_id', 2)->orderBy('id', 'asc')->get());
        });
    }
}
