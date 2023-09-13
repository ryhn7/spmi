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

    // create a multi role middleware from $request->user() & $request->dose
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();
        // dd($user->mahasiswa->pluck('role_id')->toArray());
        $allowedRoles = array_merge($user->dosen->pluck('role_id')->toArray(), $user->mahasiswa->pluck('role_id')->toArray());

        if (count(array_intersect($allowedRoles, $roles)) > 0) {
            return $next($request);
        }

        abort(403);
    }
}
