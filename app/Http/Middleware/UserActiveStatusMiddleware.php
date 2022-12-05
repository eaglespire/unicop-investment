<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserActiveStatusMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->banned_until)
        {
            auth()->logout();
            return redirect()->route('login')->withMessage('Your account has been suspended. Please contact administrator.');
        }
        return $next($request);

    }
}
