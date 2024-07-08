<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedDomain = 'https://skrealestate.pk/';

        // Check the Referer or Origin header
        $referer = $request->headers->get('referer');
        $origin = $request->headers->get('origin');

        if ($referer !== $allowedDomain && $origin !== $allowedDomain) {
            return response($origin, 403);
        }

        return $next($request);
    }
}
