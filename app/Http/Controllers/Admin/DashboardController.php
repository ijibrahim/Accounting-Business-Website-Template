<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalUsers' => User::query()->count(),
            'verifiedUsers' => User::query()->whereNotNull('email_verified_at')->count(),
            'newUsersThisMonth' => User::query()
                ->where('created_at', '>=', now()->startOfMonth())
                ->count(),
            'latestUsers' => User::query()
                ->latest()
                ->limit(5)
                ->get(),
        ]);
    }

    public function setting()
    {
        $setting = SiteSetting::query()->first();

        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = SiteSetting::query()->first();

        if (! $setting) {
            $setting = new SiteSetting;
        }

        $data = $request->except(['logo', 'favicon', 'og_image']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('settings', 'public');
        }

        if ($request->hasFile('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('settings', 'public');
        }

        $setting->updateOrCreate(
            ['id' => $setting->id ?? null],
            $data
        );
        Cache::forget('site_setting');

        return back()->with('success', 'Settings updated successfully');
    }

    public function users(): View
    {
        $users = User::query()
            ->latest()
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }
}
