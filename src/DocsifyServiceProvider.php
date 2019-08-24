<?php

namespace Mdebuf\Docsify;

use Illuminate\Support\ServiceProvider;

class DocsifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'docsify');

        $this->publishes([
                __DIR__.'/../config/docsify.php' => config_path('docsify.php'),
            ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(__DIR__.'/../config/docsify.php', 'docsify');


        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }
}
