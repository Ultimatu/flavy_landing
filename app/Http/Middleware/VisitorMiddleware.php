<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (config('app.env') === 'production') {
            $ip_address = $request->ip();
            $reader = new Reader(storage_path('app/geoip/GeoLite2-City.mmdb'), ['fr']);
            $record = $reader->city($ip_address);
            $country = $record->country->name ?? null;
            $city = $record->city->name ?? null;
            $region = $record->mostSpecificSubdivision->name ?? null;
            $postal_code = $record->postal->code ?? null;
            $user_agent = $request->header('User-Agent');
            $session_id = session()->getId();
            Visitor::updateOrCreate([
                'ip_address' => $ip_address,
                'country' => $country,
                'city' => $city,
                'region' => $region,
                'postal_code' => $postal_code,
                'session_id' => $session_id,
                'user_agent' => $user_agent
            ]);
        } else {
            $ip = $request->ip();
            $session_id = session()->getId();
            Visitor::updateOrCreate([
                'ip_address' => $ip,
                'session_id' => $session_id
            ]);
        }
        
        return $next($request);
    }
}