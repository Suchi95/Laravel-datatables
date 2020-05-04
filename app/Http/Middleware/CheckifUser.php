<?php

namespace App\Http\Middleware;

use Closure;

class CheckifUser
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
        if($request->session()->has('userid') && $request->session()->has('userrole') && $request->session()->get('userrole')=='User'){ 
             return $next($request);
        }
       
        return redirect()->to('login');
    }
  
}
