<?php

namespace EasyCome;

use Illuminate\Support\ServiceProvider;

class EasyComeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('easycome', function () {
            return new EasyCome();
        });

    }
}
