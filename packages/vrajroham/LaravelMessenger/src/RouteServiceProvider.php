<?php

namespace vrajroham\LaravelMessenger;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;

class RouteServiceProvider extends BaseServiceProvider
{
    public function map()
    {
        Route::group([
            'prefix' => 'messenger',
            'namespace' => 'vrajroham\LaravelMessenger\Controllers',
            'middleware' => ['web']
        ], function () {
            Route::get('/messenger/home', 'MessengerController@home')
                ->name('messenger.home');
        });
    }
}
