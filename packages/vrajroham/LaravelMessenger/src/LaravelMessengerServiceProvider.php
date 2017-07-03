<?php

namespace vrajroham\LaravelMessenger;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class LaravelMessengerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/routes.php';
        $this->registerViews();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('messenger', function ($app)
        {
            return new Messenger;
        });
    }

    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views','messenger');
        View::composer('messenger::home', function ($view) {
            $view->with([
                'user' => 'vrajroham :)'
            ]);
        });
    }
}
