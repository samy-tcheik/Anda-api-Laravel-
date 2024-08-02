<?php

namespace App\Http\Middleware;

use App\Exceptions\GeoLocationMissingException;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GeoLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");
        if (!isset($latitude) && !isset($longitude)) {
            throw new GeoLocationMissingException();
        }
        return $next($request);

    }
}
