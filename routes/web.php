<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('foodtype', [
        'uses' => 'FoodTypeController@showAll',
        'as' => 'foodtype'
    ]);

    Route::get('foodtype/{slug}', [
        'uses' => 'FoodTypeController@show',
        'as' => 'foodtype.show'
    ]);

    Route::get('restaurant/{slug}',[
        'uses' => 'RestaurantController@show',
        'as' => 'restaurant.show'
    ]);
});
