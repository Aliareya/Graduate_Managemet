<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check Login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Route Name
        $permission = $request->route()->getName();
// dd(auth()->user()->hasPermission($permission));
        // Check Permission
        if (auth()->user()->hasPermission($permission)) {

            abort(403, 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
