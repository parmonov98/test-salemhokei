<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class CheckAuth
{
    /**
     * Перехват входящего запроса.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()) {
            return redirect("/login")->with("need_auth", true);
        }

        return $next($request);
    }
}
