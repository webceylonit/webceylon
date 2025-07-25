<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SocialMedia;
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
    public function boot()
    {
        View::composer('*', function ($view) {
            $services = Service::all();
            $view->with('footerServices', $services);
        });

        View::composer('*', function ($view) {
            $socialLinks = SocialMedia::first();
            $view->with('socialLinks', $socialLinks);
        });
    }
}
