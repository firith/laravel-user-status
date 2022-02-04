<?php

namespace Firith\LaravelUserStatus\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBannedUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->is_enabled === false)) {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('login')->withErrors(['email' => trans('user-status::user-status.disabled_user')]);
        }

        return $next($request);
    }
}
