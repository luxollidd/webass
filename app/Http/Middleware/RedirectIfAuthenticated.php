<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "hod" && Auth::guard($guard)->check()) {
            return redirect('/hod');
        }
        if ($guard == "student" && Auth::guard($guard)->check()) {
            return redirect('/student');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
