<?php

namespace App\Providers;

use App\Services\HealthcheckService;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HealthcheckProvider extends ServiceProvider
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
        $this->app->bind('health', function($app){
            return new HealthcheckService($app);
        });
    }
}
