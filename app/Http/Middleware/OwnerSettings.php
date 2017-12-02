<?php

namespace App\Http\Middleware;
//namespace App;
use Closure;

use App\Models\Building;

 use Auth;

  

 use App\Setting;

class OwnerSettinge extends FormRequest
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
        // if (Auth::id() != Setting::class) {
        //     return "403";
        //   }
//$setting = Setting::class->get($request);
        if(auth()->check()) {
            //sprawdza aktualnego usera 
            $id_route = $request->route('id'); // ma inna wartosc

            //Auth::user()->i
            $setting = Setting::find($request->parameter('id'));

            if(Auth::user()->id != $setting->user_id) {
            return redirect("/");
        }
        else {
            return $next($request);
        }
        }
        // $id = $request->route('settings'); // For example, the current URL is: /posts/1/edit
        
        //     $setting = Setting::findOrFail($id); // Fetch the post
        
        //     if($setting->user_id == $request->auth()->id)
        //     {
        //         return $next($request); // They're the owner, lets continue...
        //     }
        
        //     return redirect()->to('/'); // Nope! Get outta' here.

    
    }
}
