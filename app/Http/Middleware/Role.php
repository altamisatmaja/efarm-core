<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::check() && Auth::user()->user_role == $role) {
                return $next($request);
            }
        }
    
        $currentUserRole = Auth::check() ? Auth::user()->user_role : null;
    
        $redirectTo = '';
    
        switch ($currentUserRole) {
            case 'Admin':
                $redirectTo = 'admin.login';
                break;
            case 'Partner':
                $redirectTo = 'partner.login';
                break;
            default:
                $redirectTo = 'user.login';
                break;
        }
    
        Auth::logout();
        return redirect()->route($redirectTo)->with('status', 'You are not authorized to access this page.');    
    }
}
