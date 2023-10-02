<?php

namespace Patrickmwangi017\LaravelCalendar;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-calendar', function ($app) {
            return $app->make('Patrickmwangi017\LaravelCalendar\Calendar');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/', 'laravel-calendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-calendar'];
    }
}
