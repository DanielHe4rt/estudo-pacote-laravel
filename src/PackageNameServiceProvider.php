<?php
namespace frozentest;

use Illuminate\Support\ServiceProvider;

class frozentestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('frozentest.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/courier.php', 'frozentest'
        );
    }
}
