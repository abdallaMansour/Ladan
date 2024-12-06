<?php

namespace App\Providers;

use App\Models\User;
// use Illuminate\Support\Facades\App;
use App\Models\ContactSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;

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
        // View::share('whatsapp', ContactSetting::first()->whatsapp);
        // View::share('twitter', ContactSetting::first()->twitter);
        // View::share('tiktok', ContactSetting::first()->tiktok);
        // View::share('instagram', ContactSetting::first()->instagram);
    }
}
