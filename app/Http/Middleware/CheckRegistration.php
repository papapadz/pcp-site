<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class CheckRegistration
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
        if(Auth::user()->email_verified_at==null) {
            Auth::logout();
            return redirect()->back()->with('not_verified','error');
        }
        return $next($request);
    }
}
