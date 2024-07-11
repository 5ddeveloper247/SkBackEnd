<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            
            // Check if the user is an admin and their status is inactive
            if ($user->role === 'admin' && $user->status =='0') {
                Auth::logout(); // Log out the user
                Session::flush(); // Flush all session data

                // Redirect to the login page with an error message
                return redirect()->route('admin.login.view')->withErrors(['Your account is inactive.']);
            }
        }

        // Proceed with the request
        return $next($request);
    }
}
