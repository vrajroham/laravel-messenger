<?php

Route::group([
    'prefix' => 'messenger',
    'namespace' => 'vrajroham\LaravelMessenger\Controllers',
    'middleware' => ['web']
], function () {
    Route::get('/', 'MessengerController@home')->name('messenger.home');
    Route::get('/all-users', 'MessengerController@all_users')->name('messenger.all-users');
    Route::post('/send-message', 'MessengerController@send_message')->name('messenger.send-message');
});
