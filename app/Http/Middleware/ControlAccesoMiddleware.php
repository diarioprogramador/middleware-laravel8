<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ControlAccesoMiddleware
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
        $blockAccess = true;
        if(auth()->user()->admin === 1)$blockAccess = false;
        if($blockAccess){
            return back()->with('message', ['danger', 'No eres Admin no tienes privilegios para acceder']);
        }
        return $next($request);
    }
}
