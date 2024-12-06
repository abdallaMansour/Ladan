<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        if (!auth()->check()) {
            return back()->with('error', 'Unauthenticated.');
        }

        /** @var \App\Models\User $user */
        $user = auth()->user();
        if (!$user->hasPermission($permission)) {
            return back()->with('error', 'Not has permission');
        }
        return $next($request);
    }
}
