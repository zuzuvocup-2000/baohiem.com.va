<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IsUserHospital
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('hospital')->check()) {
            return $next($request);
        }
        return redirect('/')->with('error', "Bạn không có quyền truy cập vào chức năng này.");
     
    }
}