<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{
    Check,
    Endpoint
};
use App\Observers\{
    CheckObserver,
    EndpointObserver
};

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
        Check::observe(CheckObserver::class);
        Endpoint::observe(EndpointObserver::class);
    }
}
