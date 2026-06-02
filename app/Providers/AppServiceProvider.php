<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! Schema::hasTable('site_settings')) {
            View::share('setting', $this->fallbackSetting());

            return;
        }

        $setting = Cache::rememberForever('site_setting', function () {
            return SiteSetting::first();
        }) ?? $this->fallbackSetting();

        View::share('setting', $setting);
    }

    private function fallbackSetting(): SiteSetting
    {
        return new SiteSetting([
            'site_name' => config('app.name', 'Cain & Co'),
            'viewport' => 'width=device-width, initial-scale=1.0',
            'meta_title' => config('app.name', 'Cain & Co'),
            'meta_description' => '',
            'meta_keywords' => '',
            'phone' => '',
            'email' => '',
            'address' => '',
        ]);
    }
}
