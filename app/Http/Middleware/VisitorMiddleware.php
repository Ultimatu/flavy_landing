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
    protected $botAgents = [
        'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 'yandexbot', 'sogou', 'exabot', 
        'facebot', 'ia_archiver', 'mj12bot', 'semrushbot', 'ahrefsbot', 'spbot', 'pinterestbot', 'crawler',
        'yahoo', 'bot', 'spider', 'archive.org_bot', 'applebot', 'linkedinbot', 'embedly', 'quora link preview',
        'showyoubot', 'outbrain', 'wkhtmltoimage', 'wkhtmltopdf', 'semrushbot', 'ltx71', 'screaming frog',
        'facebookexternalhit', 'monit', 'dataprovider', 'Xenu', 'Domain re-animator', 'SeznamBot', 'Seznam screenshot-generator',
        'Google Web Preview', 'Pinterest', 'Mediatoolkitbot', 'Slackbot', 'vkShare', 'TelegramBot', 'Discordbot',
        'WhatsApp', 'SerendeputyBot', 'Baiduspider', 'BingPreview', 'CensysInspect', 'NetcraftSurveyAgent',
        'Page2RSS', 'CCBot', 'IstellaBot', 'Mail.RU_Bot', 'Python-urllib', 'DotBot', 'Googlebot-Image', 'Googlebot-Video',
        'AdsBot-Google', 'Googlebot-News', 'Google-Site-Verification', 'GoogleSecurityScanner'
    ];


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isBot($request->header('User-Agent'))) {
            return $next($request);
        }

        if (config('app.env') === 'production') {
            $this->handleProduction($request);
        } else {
            $this->handleNonProduction($request);
        }

       
        return $next($request);
    }

    private function handleProduction(Request $request)
    {
        $ip_address = $request->ip();
        $reader = new Reader(storage_path('app/geoip/GeoLite2-City.mmdb'), ['fr']);
        $record = $reader->city($ip_address);
        $country = $record->country->name ?? null;
        $city = $record->city->name ?? null;
        $region = $record->mostSpecificSubdivision->name ?? null;
        $postal_code = $record->postal->code ?? null;
        $user_agent = $request->header('User-Agent');
        $session_id = $request->session()->getId();

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
    }

    private function handleNonProduction(Request $request)
    {
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

    private function shouldUpdateVisitor($lastVisit)
    {
        if (!$lastVisit) {
            return true;
        }

        // Update if last visit was more than 15 minutes ago
        return Carbon::now()->diffInMinutes($lastVisit) > 15;
    }

    private function isBot($userAgent)
    {
        foreach ($this->botAgents as $botAgent) {
            if (stripos($userAgent, $botAgent) !== false) {
                return true;
            }
        }
        return false;
    }
}
