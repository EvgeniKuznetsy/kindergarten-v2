<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class Access
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $user = $request->user();

        if($user->role !== $role) abort(403);

        return $next($request);
    }

}
