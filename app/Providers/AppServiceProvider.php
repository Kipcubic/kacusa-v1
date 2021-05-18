<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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

  
    public function boot()
    {
        Blade::if('leader', function(){
          
            return auth()->user()->roles->count() > 0? : false;
        });

        Blade::if('chairperson', function(){
            $user=auth()->user();
            return $user->is_chairperson? : false;
        });
        Blade::if('member', function(){
            $user=auth()->user();
            return auth()->user()->roles->count() == 0 ? : false;

        });
    }
}
