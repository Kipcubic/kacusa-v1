<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\Models\User;


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
       
        Schema::defaultStringLength(191);

        Blade::if('leader', function () {

            return auth()->user()->roles->count() > 0 ?: false;
        });

        Blade::if('chairperson', function () {
            $user = auth()->user();
            return $user->is_chairperson ?: false;
        });
        Blade::if('member', function () {
            $user = auth()->user();
            return auth()->user()->roles->count() == 0 ?: false;
        });

      
    }
}
