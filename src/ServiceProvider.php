<?php

namespace Clover\Qg;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/qg.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('qg.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'qg'
        );

        $this->app->bind('qg', function () {
            return new Qg();
        });
    }
}
