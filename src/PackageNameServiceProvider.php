<?php
namespace frozentest;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class frozentestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {

       $this->app->singleton('hello.world',function($app){
            return new \frozentest\Test\HelloWorld;
       });
    }
}
