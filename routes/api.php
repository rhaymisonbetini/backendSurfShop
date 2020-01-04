<?php

use Illuminate\Http\Request;

Route::post('create', 'Users\UserController@create');

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
