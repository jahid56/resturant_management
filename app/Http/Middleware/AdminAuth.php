<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Admin;
use Auth;
use Redirect;

class AdminAuth
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
        
        
        if (Auth::check())
        {
            
           return $next($request);

        } else return Redirect::to('admin')->withErrors(array('need' => 'You have to log in first'));
        
        //$find = Admin::find($id);
         
        //return Redirect::to('admin');
        
        
    
    }

}
