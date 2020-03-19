<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next, $guard = null)
    public function handle($request, Closure $next, $rol_id)

    {
    //             if(!Auth::user()->esAdmin()){
    //                 return redirect('/'); 
    //             }
        
    if($request->user()->rol_id != $rol_id){
        return redirect('/error404');
    }
        return $next($request);
    }
}
