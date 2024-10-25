<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;

class RedirectIfAuthenticated extends Middleware
{
    protected $guard;

    public function handle($request, \Closure $next, $guard = null)
    {
        if (auth()->guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
