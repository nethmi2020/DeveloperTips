<?php

namespace App\Http\Middleware;

use Closure;

class adminmiddleware
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
        if(Auth::admin()->password=='rumesh123')
        {
            return view('admin/dashboard');
        }
        else{
             return redirect('/home1');
        }
       
    }
}
