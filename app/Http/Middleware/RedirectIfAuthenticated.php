<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {

        $user = Auth::guard($guard)->user();

        if ($user) {
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin/dashboard');

                case 'staff':
                    return redirect('/staff/dashboard');

                case 'user':
                default:
                    return redirect('/dashboard');
            }
        }
    }

        return $next($request);
    }
}
