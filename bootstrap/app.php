<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
<<<<<<< HEAD
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\isCustomer;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        // web: __DIR__.'/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        using: function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['web', 'auth', isAdmin::class])
                ->prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web', 'auth', isCustomer::class])
                ->prefix('client')
                ->as('customer.')
                ->group(base_path('routes/customer.php'));
        },
=======

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
<<<<<<< HEAD
    })->create();
=======
    })->create();
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
