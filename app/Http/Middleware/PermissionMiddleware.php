<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $user = auth()->user();
        if (!$user) {
            return redirect('/')->with('error', 'Bạn không có quyền truy cập vào chức năng này.');
        }

        $role = Role::findById($user->role_id);
        $rolePermissions = $role->permissions->pluck('name')->toArray();

        foreach ($rolePermissions as $permission) {
            if ($request->route()->getName() === $permission) {
                return $next($request);
            }
        }

        return back()->with('error', 'Bạn không có quyền truy cập vào chức năng này.');
    }
}
