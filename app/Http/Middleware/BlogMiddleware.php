<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class BlogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userid = Auth::id();
        $blog = $request->route('blog');
       
        if( $request->route()->getName() === 'blogs.edit' || $request->route()->getName() === 'blogs.update' || $request->route()->getName() === 'blogs.destroy'){
            if ($blog->user_id !== $userid) {
                return redirect()->route('home');
            }
        }
        

        return $next($request);
    }
}
