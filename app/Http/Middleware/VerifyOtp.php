<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyOtp
{
    use ApiResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->otp_verified_at === null) {
            return $this->error(null, 'BAD_REQUEST', 'Please verify your email before you can continue', 401);
        }
        return $next($request);
    }
}
