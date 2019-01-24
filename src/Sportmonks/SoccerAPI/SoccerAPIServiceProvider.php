<?php

namespace Sportmonks\SoccerAPI;

use Illuminate\Support\ServiceProvider;

/**
 * Class SoccerAPIServiceProvider
 *
 * @package Sportmonks\SoccerAPI
 */
class SoccerAPIServiceProvider extends ServiceProvider {

    public function boot()
    {
        $configPath = __DIR__.'/../../config';

        $this->mergeConfigFrom($configPath.'/config.php', 'soccerapi');

        $this->publishes([
            $configPath.'/config.php' => config_path('soccerapi.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton('soccerapi', function()
        {
            return new SoccerAPI();
        });
    }

}
