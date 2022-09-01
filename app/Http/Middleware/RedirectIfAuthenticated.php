<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                if ('admin' === $guard) {
                    return redirect(RouteServiceProvider::ADMIN_HOME);
                }
                elseif ('user' === $guard) {
                    return redirect(RouteServiceProvider::USER_HOME);
                }
                elseif ('donor' === $guard) {
                    return redirect(RouteServiceProvider::DONOR_HOME);
                }
                // return redirect(RouteServiceProvider::HOME);
            }

            return $next($request);
        }
    }
}
