<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use App\User;
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
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if(Auth::user()->type == 'utilisateur'){

                return redirect('/home');
            }
            elseif(Auth::user()->type =='admin')
            {
                return redirect('/admin');
            }
            elseif(Auth::user()->type =='entreprise')
            {
                return redirect('/entreprisecreate');
            }
            else
            {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
