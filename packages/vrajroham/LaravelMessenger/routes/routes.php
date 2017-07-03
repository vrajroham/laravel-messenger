<?php

Route::group([
    'prefix' => 'messenger',
    'namespace' => 'vrajroham\LaravelMessenger\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('/', 'MessengerController@home')
        ->name('messenger.home');
});
