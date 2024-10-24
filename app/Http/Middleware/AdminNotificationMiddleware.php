<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminNotificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!$request->is('admin/login') && !$request->is('admin/register')) {
            $adminUser = Auth::guard('admin')->user();

            // Check if an admin is authenticated
            if ($adminUser) {
                // Share notifications globally to all views except login and register
                View::share('notifications', $adminUser->unreadNotifications);
            } else {
                View::share('notifications', collect()); // Share an empty collection if no admin
            }
        }

        return $next($request);
    }
}
