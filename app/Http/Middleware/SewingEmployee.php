<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SewingEmployee
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
        if (auth()->user()->role=='operator')
        {
        return $next($request);
        }
        return redirect()->route('login')->with('message','You are not authorized for this page!');
    }
}
