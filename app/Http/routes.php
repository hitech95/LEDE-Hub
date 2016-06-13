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
Route::get('/', 'HomeController@index');

//Login
Route::auth();

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/dashboard', 'Admin\AdminController@stats');
    Route::get('/stats', 'Admin\AdminController@stats');

    //Route::resource('users', 'Admin\UserController');

    Route::get('hardware/{category}', 'Admin\AHardwareController@index')
        ->where('category', '(devices|platforms)');
    Route::resource('hardware', 'Admin\AHardwareController');

    Route::resource('brands', 'Admin\BrandController');
    Route::resource('specs', 'Admin\SpecController');
    Route::resource('tags', 'Admin\TagController');
});

//Platform
Route::group(['prefix' => 'platform'], function () {
    Route::get('/', 'HardwareController@indexPlatform');
    Route::get('/{brand}/{name}', 'HardwareController@show')
        ->where('brand', '[0-9a-z\-]+')
        ->where('name', '[0-9a-z\-]+');
});

//Device
Route::group(['prefix' => 'device'], function () {
    Route::get('/', 'HardwareController@indexDevice');
    Route::get('/{brand}/{name}', 'HardwareController@show')
        ->where('manufacturer', '[0-9a-z\-]+')
        ->where('name', '[0-9a-z\-]+');
});

//Staff
Route::group(['prefix' => 'staff'], function () {
    Route::get('/', 'StaffController@index');
    Route::get('/{nickname}', 'StaffController@show')
        ->where('nickname', '[0-9a-z\-]+');
});

//TODO - Report
/*Route::group(['prefix' => 'report'], function () {
    Route::get('/', 'ReportController@index');
    Route::get('/{id}', 'ReportController@show')
        ->where('id', '[0-9]+');
});*/

//Release
Route::group(['prefix' => 'release'], function () {
    Route::get('/', 'ReleaseController@index');
    Route::get('/create', 'ReleaseController@create');
    Route::get('/{version}', 'ReleaseController@show')
    ->where('version', 'r[0-9]+');
    Route::post('/', 'ReleaseController@store');
});
