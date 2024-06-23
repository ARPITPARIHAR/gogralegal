<?php
<<<<<<< HEAD

=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() && auth()->user()->user_type=='customer') {
            return $next($request);
        } else{
            abort(404);
        }
    }
}
