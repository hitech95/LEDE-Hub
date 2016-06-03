<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Index
Route::get('/', function () {
    return view('pages.home');
});

//Login
Route::auth();

//Platform
Route::group(['prefix' => 'platform'], function () {
    Route::get('/', 'DeviceController@indexPlatform');
    Route::get('/{manufacturer}/{shortname}', 'DeviceController@details')
        ->where('manufacturer', '[0-9a-z\-]+')
        ->where('shortname', '[0-9a-z\-]+');
});

//Device
Route::group(['prefix' => 'device'], function () {
    Route::get('/', 'DeviceController@indexDevice');
    Route::get('/{manufacturer}/{shortname}', 'DeviceController@details')
        ->where('manufacturer', '[0-9a-z\-]+')
        ->where('shortname', '[0-9a-z\-]+');
});

//Staff
Route::group(['prefix' => 'staff'], function () {
    Route::get('/', 'StaffController@index');
    Route::get('/{nickname}', 'StaffController@details');
});

//Report
Route::group(['prefix' => 'report'], function () {
    Route::get('/', 'ReportController@index');
    Route::get('/{id}', 'ReportController@details')
        ->where('id', '[0-9]+');

    Route::get('/{release}', 'ReportController@release');

    Route::group(['prefix' => 'report'], function () {
        Route::get('/', 'ReportController@index');
        Route::get('/{id}', 'ReportController@details')
            ->where('id', '[0-9]+');
    });
});

//Release
Route::group(['prefix' => 'release'], function () {
    Route::get('/', 'ReleaseController@index');
    //Route::get('/{version}', 'ReleaseController@details')
    //->where('version', 'r[0-9]+');
});



//Route::get('/home', 'HomeController@index');
