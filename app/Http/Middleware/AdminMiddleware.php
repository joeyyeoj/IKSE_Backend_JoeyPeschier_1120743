<?php

namespace App\Http\Middleware;

use JWTAuth;

use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        $user = auth()->user();

        if($user->admin){
            return $next($request);
        }
        return response()->json(['error' => 'Je bent geen admin!'], 401);
    }
}
