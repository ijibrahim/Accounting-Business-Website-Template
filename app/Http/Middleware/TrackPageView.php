<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Agent\Agent;
use Symfony\Component\HttpFoundation\Response;
use App\Models\VisitorLog;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class TrackPageView
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only GET requests
        if (! $request->isMethod('GET')) {
            return $response;
        }

        // Ignore admin panel
        if ($request->is('admin*')) {
            return $response;
        }

        if (! Schema::hasTable('page_views')) {
            return $response;
        }

        $agent = new Agent;

        $device = $agent->isTablet()
            ? 'Tablet'
            : ($agent->isMobile() ? 'Mobile' : 'Desktop');

        // Duplicate prevention (30 min)
        $cacheKey = 'page_view_' . md5(
            $request->ip() . $request->path()
        );

        if (! cache()->has($cacheKey)) {

            cache()->put(
                $cacheKey,
                true,
                now()->addMinutes(30)
            );

            PageView::create([
                'blog_post_id' => $request->attributes->get('blog_post_id'),
                'url' => $request->fullUrl(),
                'path' => '/' . ltrim($request->path(), '/'),
                'referrer' => $request->headers->get('referer'),

                'ip_hash' => hash('sha256', $request->ip()),

                'device' => $device,
                'browser' => $agent->browser(),
                'platform' => $agent->platform(),
            ]);

            $ip = $request->ip();

            $position = Location::get($ip);

            VisitorLog::create([
                'user_id' => Auth::check() ? Auth::id() : null,
                'ip' => $ip,
                'country' => data_get($position, 'countryName'),
                'region' => data_get($position, 'regionName'),
                'city' => data_get($position, 'cityName'),

                'latitude' => data_get($position, 'latitude'),
                'longitude' => data_get($position, 'longitude'),

                'url' => $request->fullUrl(),
                'browser' => $agent->browser(),
                'platform' => $agent->platform(),
            ]);
        }

        return $response;
    }
}
