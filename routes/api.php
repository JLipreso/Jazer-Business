<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'business'], function () {
        Route::get('test', function () {
            return [];
        });
    });
});

