<?php

namespace App\Http\Middleware;

use Closure;

class users
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
       if(auth()->user()->is_admin == 1){
        return redirect()->route('admin');
        }
        return redirect()->route('home');
    }
}
