<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PageGenerateServiceProvider extends ServiceProvider
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
        $this->app->bind(PageGenService::class, function ($app) {
            return new PageGenService(
                $app->make('App\Domains\Pages\PageRepository'));
        });
    }
}
