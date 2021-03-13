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
            return redirect()->back()->with('not_verified','Thank you, please wait for us to verify your account. We will be sending an email to your registered email address as soon as it is verified.');
        } else if(Auth::user()->role==1) {
            Auth::logout();
            return redirect()->back()->with('not_verified','The event will be open from March 12 and 13, 2021. Please login on these days. Thank you');
        }
        return $next($request);
    }
}
