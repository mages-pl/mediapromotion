<?php

namespace App\Http\Middleware;

use Closure;

use App\User;
use Session;
 
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
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

//         if(Auth::id() == '1') { 
// return "403";
//         }
//         return $next($request."fgfg".Auth::id());

//         // return "403";
//        if(Auth::check()) {
//         if(User::id() != $request->id) {
//             return "403";
//           }
//        }
//         $user = User::find($request->id);
//         if(Auth::id() != $user) : 
// return "403";
//         endif;

        //return $next($request);
    return $next($request);
    }
}
