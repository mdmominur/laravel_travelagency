<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminConfirm
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
        if(Auth::user()->admin_confirmation != 1){
            return response()->view('auth.adminConfirmation');
        }
        return $next($request);
    }
}
