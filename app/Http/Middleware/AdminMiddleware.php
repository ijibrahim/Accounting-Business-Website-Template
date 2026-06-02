<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        if (
            ! auth()->user()->hasRole('Super Admin')
            && ! auth()->user()->hasRole('Admin')
        ) {

            abort(403);
        }

        return $next($request);
    }
}
