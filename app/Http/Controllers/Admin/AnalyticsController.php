<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\PageView;
use App\Models\VisitorLog;
use Carbon\Carbon;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function index(): View
    {
        $totalVisits = PageView::count();

        $todayVisits = PageView::whereDate(
            'created_at',
            Carbon::today()
        )->count();

        $uniqueVisitors = PageView::query()
            ->whereDate('created_at', today())
            ->select('ip_hash')
            ->distinct()
            ->count();

        $monthVisits =  PageView::query()
            ->where(
                'created_at',
                '>=',
                now()->subDays(30)
            )
            ->select('ip_hash')
            ->distinct()
            ->count();

        $totalBlogVisits = PageView::query()
            ->whereNotNull('blog_post_id')
            ->count();

        $topPages = PageView::query()
            ->selectRaw('path, COUNT(*) as visits')
            ->groupBy('path')
            ->orderByDesc('visits')
            ->limit(10)
            ->get();

        $topReferrers = PageView::query()
            ->selectRaw('referrer, COUNT(*) as visits')
            ->whereNotNull('referrer')
            ->where('referrer', '!=', '')
            ->groupBy('referrer')
            ->orderByDesc('visits')
            ->limit(10)
            ->get();

        $topBrowsers = PageView::query()
            ->selectRaw('browser, COUNT(*) as visits')
            ->whereNotNull('browser')
            ->groupBy('browser')
            ->orderByDesc('visits')
            ->limit(10)
            ->get();

        $topDevices = PageView::query()
            ->selectRaw('device, COUNT(*) as visits')
            ->whereNotNull('device')
            ->groupBy('device')
            ->orderByDesc('visits')
            ->get();

        $dailyViews = PageView::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->where(
                'created_at',
                '>=',
                Carbon::now()->subDays(30)
            )
            ->groupByRaw('DATE(created_at)')
            ->orderBy('date')
            ->get();

        $topBlogPosts = BlogPost::query()
            ->withCount('pageViews')
            ->orderByDesc('page_views_count')
            ->limit(10)
            ->get();

        $topCountries = VisitorLog::query()
            ->selectRaw('country, COUNT(*) as visits')
            ->groupBy('country')
            ->orderByDesc('visits')
            ->limit(10)
            ->get();

        $topCities = VisitorLog::query()
            ->selectRaw('city, COUNT(*) as visits')
            ->groupBy('city')
            ->orderByDesc('visits')
            ->limit(10)
            ->get();

        $recentVisitors = VisitorLog::query()
            ->latest()
            ->paginate(10);

        $mapVisitors = VisitorLog::query()
            ->selectRaw('
        city,
        country,
        latitude,
        longitude,
        COUNT(*) as visitors
    ')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->groupBy(
                'city',
                'country',
                'latitude',
                'longitude'
            )
            ->get();

        return view('admin.analytics.index', compact(
            'totalVisits',
            'todayVisits',
            'uniqueVisitors',
            'monthVisits',
            'totalBlogVisits',
            'topPages',
            'topReferrers',
            'topBrowsers',
            'topDevices',
            'dailyViews',
            'topBlogPosts',
            'topCountries',
            'topCities',
            'recentVisitors',
            'mapVisitors'
        ));
    }
}
