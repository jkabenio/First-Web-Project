<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class MunicipalityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role_as == '13') //13 = Basud  municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '12') //12 = Capalonga municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '11') //11 = Daet municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '10') //10 = Panganiban municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '9') //9 = Labo municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '8') //8 = Mercedes municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '7') //7 = Paracale municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '6') //6 = San Lorenzo municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '5') //5 = San vicente municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '4') //4 = Sta Elena municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '3') //3 = Talisay municipality admin 
            {
                return $next($request);
            }
            if(Auth::user()->role_as == '2') //2 = Vinzons municipality admin 
            {
                return $next($request);
            } 
            else
            {
               return redirect('/home')->with('error', 'Access Denied! As you are not Municipality Admin');
            }

        }
        else
        {
            return redirect('/home')->with('error', 'Please Login First');
        }        
    }
}
