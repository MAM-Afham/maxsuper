<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        if(!Auth::user()->role_as=='1')
        {
         return redirect('/home')->with('message','hi');

        }


        return $next($request);
    }
}
