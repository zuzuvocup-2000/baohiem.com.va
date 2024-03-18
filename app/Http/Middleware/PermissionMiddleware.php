<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null, $guard = null)
    {
        if (!Auth::guard('web')->check()) {
            return redirect('/')->with('error', "Bạn không có quyền truy cập vào chức năng này.");
        }
        $authGuard = app('auth')->guard('web');
        if (!is_null($permission)) {
            $permissions = is_array($permission)
                ? $permission
                : explode('|', $permission);
        }

        if (is_null($permission)) {
            $permission = $request->route()->getName();

            $permissions = array($permission);
        }


        // foreach ($permissions as $permission) {
        //     if ($authGuard->user()->can($permission)) {
        return $next($request);
        //     }
        // }

        throw UnauthorizedException::forPermissions($permissions);
    }
}
