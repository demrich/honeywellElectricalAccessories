<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
     if(auth()->guest()){
      return redirect()->route('adminLogin');
     }else{
        if (auth()->user()->type != 'admin'){
            return redirect()->route('adminLogin');
        }
      return $next($request);
    }
    }
}
