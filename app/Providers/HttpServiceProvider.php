<?php

namespace App\Providers;

use App\Contracts\HttpServiceInterface;
use App\Services\HttpService\GuzzleHttpService;
use App\Services\HttpService\VinelabHttpService;
use Illuminate\Support\ServiceProvider;

class HttpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HttpServiceInterface::class,
            GuzzleHttpService::class
        );
    }
}
