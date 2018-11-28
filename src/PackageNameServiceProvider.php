<?php
namespace :package_name;

use Illuminate\Support\ServiceProvider;

class :package_nameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path(':package_name.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/courier.php', ':package_name'
        );
    }
}
