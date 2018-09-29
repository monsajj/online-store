<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\FileStorageInterface;
use App\Services\FileStorage\S3FileStorage;

class FileStorageProvider extends ServiceProvider
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
            FileStorageInterface::class,
            S3FileStorage::class
        );
    }
}
