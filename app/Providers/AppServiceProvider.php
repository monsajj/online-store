<?php

namespace App\Providers;

use App\Contracts\FileStorageInterface;
use App\Services\FileStorage\S3FileStorage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            FileStorageInterface::class,
            S3FileStorage::class
        );
    }
}
