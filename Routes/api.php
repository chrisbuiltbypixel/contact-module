<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::group(['middleware' => 'auth:admin_api'], function () {
    Route::get('contacts', 'Api\ContactController@index');
    Route::get('contacts/{contact}', 'Api\ContactController@show');
    Route::post('contacts', 'Api\ContactController@store');
    Route::put('contacts/{contact}', 'Api\ContactController@update');
    Route::delete('contacts', 'Api\ContactController@destroy');
});
