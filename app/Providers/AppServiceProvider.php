<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        Paginator::useBootstrap();
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
        Schema::defaultStringLength(250);
    }
}
