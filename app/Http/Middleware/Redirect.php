<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthController;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Redirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && $request->routeIs('sign-in') || $request->routeIs('sign-up')){
            return redirect()->route('home');

        }
        if(!Auth::check() && $request->routeIs('home')|| $request->path() == '/'){
            return redirect()->route('sign-in');
        }
        return $next($request);
    }
}
