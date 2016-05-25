<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Wallet;
use Auth;

class TimerMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$timer = 200;

        if (Auth::user()->wallet) {

            if (Auth::user()->wallet->timer > 0) {
                return back()->with('message', 'Oups! Come back after ' . Auth::user()->wallet->timer . ' minutes!');
            }
        }

        return $next($request);
    }
}
