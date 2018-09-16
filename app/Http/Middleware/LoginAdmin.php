<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd(Auth::check() && Auth::user()->role_id == 2);
        if (Auth::check() && Auth::user()->role_id == 1) {
            
            return $next($request);
        } else if (Auth::check()){
             return redirect('/');
        } else {
            return redirect('/admin/login');
        }
    }
}
