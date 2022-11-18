<?php

/*
 * This file is part of the IndoRegion package.
 *
 * 
 *
 */

namespace Zainal21\IndoRegion;

use Illuminate\Support\ServiceProvider;
use Zainal21\IndoRegion\IndoRegionPublishCommand;

/**
 * IndoRegion Service Provider
 */
class IndoRegionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                IndoRegionPublishCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
