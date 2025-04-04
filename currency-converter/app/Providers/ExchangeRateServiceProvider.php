<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ExchangeRateService;

class ExchangeRateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
{
    $this->app->singleton(ExchangeRateService::class, function ($app) {
        return new ExchangeRateService();
    });
}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
