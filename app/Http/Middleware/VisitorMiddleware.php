<?php

namespace App\Http\Middleware;


use App\Models\Visitor;
use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

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

            $visitor = Visitor::where('ip_address', $ip_address)->where('session_id', $session_id)->first();

            if (!$visitor || $this->shouldUpdateVisitor($visitor->last_visit)) {
                Visitor::updateOrCreate(
                    [
                        'ip_address' => $ip_address,
                        'session_id' => $session_id,
                    ],
                    [
                        'country' => $country,
                        'city' => $city,
                        'region' => $region,
                        'postal_code' => $postal_code,
                        'user_agent' => $user_agent,
                        'last_visit' => Carbon::now()
                    ]
                );
            }
        } else {
            $ip = $request->ip();
            $session_id = $request->session()->getId();
            $visitor = Visitor::where('ip_address', $ip)->where('session_id', $session_id)->first();

            if (!$visitor || $this->shouldUpdateVisitor($visitor->last_visit)) {
                Visitor::updateOrCreate(
                    [
                        'ip_address' => $ip,
                        'session_id' => $session_id,
                    ],
                    [
                        'last_visit' => Carbon::now()
                    ]
                );
            }
        }

        return $next($request);
    }

    private function shouldUpdateVisitor($lastVisit)
    {
        if (!$lastVisit) {
            return true;
        }

        // Update if last visit was more than 30 minutes ago
        return Carbon::now()->diffInMinutes($lastVisit) > 30;
    }
}
