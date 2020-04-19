<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use \View;
use Illuminate\Support\Facades\Auth;




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

        View::composer('*', function($view){        

            $view->with(
                [
                    'auth'=> Auth::user(),
                ]);
        });

        Schema::defaultStringLength(191);
    }
}
