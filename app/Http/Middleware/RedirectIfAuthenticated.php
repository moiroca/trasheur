<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Utilities\Constant;

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
        $user    = Auth::user();

        if($user && $user->user_type == Constant::ADMIN_ROLE) {
            return redirect('/admin');
        } else if($user) {
            return redirect('/home');
        }

        return $next($request);
    }
}
