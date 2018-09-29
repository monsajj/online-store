<?php

namespace App\Providers;

use App\Contracts\CalculatorInterface;
use App\Services\Calculator;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
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
        $this->app->bind('math',function($app){
            return new Calculator($app);

        });
    }
}
