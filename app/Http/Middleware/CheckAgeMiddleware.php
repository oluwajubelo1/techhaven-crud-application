<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->name != "segun" ){
//            dd("method 1");
            return response()->json(["message"=>"not allowed to perform this operation"],Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
