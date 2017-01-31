<?php

Route::group(['middleware' => 'web', 'prefix' => 'jwtauth', 'namespace' => 'App\\Components\JwtAuth\Http\Controllers'], function()
{
    Route::get('/', 'JwtAuthController@index');
});
