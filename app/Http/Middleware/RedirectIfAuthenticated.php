<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Todo : Fazer novo redirecionamento para o caso de um employer    
        if (Auth::guard($guard)->check()) {
            if($guard == 'admin'){
                return redirect()->route('admin-home');
            }
            
            return redirect('/home');

        }

        return $next($request);
    }
}
