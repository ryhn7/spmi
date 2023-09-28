<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    // create a multi role middleware from $guard mahasiswa and dosen
    public function handle(Request $request, Closure $next, $guard)
    {
        if ($guard == 'mahasiswa') {
            if (auth()->guard($guard)->check()) {
                return $next($request);
            }
        } else if ($guard == 'dosen') {
            if (auth()->guard($guard)->check()) {
                return $next($request);
            }
        } else if ($guard == 'tendik') {
            if (auth()->guard($guard)->check()) {
                return $next($request);
            }
        } 

        abort(403);
    }
}