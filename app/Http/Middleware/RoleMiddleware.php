<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user =$request->user();
        if(!$user){
            redirect()->route(login);
        }
        if(!in_array($user->role, $roles, true)){
            abort(403, 'You are not authorized');
        }
        return $next($request);
    }
}
