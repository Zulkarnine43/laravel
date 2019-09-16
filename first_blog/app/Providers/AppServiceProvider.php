<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\add_category;

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
       // View::share('name',Auth::user()->name);
       // View::share('name','Zulkar Nine');
        View::composer('admin.headerFooter',function ($view){
            $view->with('categorys', add_category::all());
        });
    }
}
