<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class staffauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('STAFF_LOGIN'))
        {
            return $next($request); 
        }
        else{
            $request->session()->flash('error','Access denied');
            return redirect('marketing-staff');
        }
      
    }
}
