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

    Route::get('foodtypes', [
        'uses' => 'FoodTypeController@showAll',
        'as' => 'foodtypes'
    ]);

    Route::get('foodtype/{slug}', [
        'uses' => 'FoodTypeController@show',
        'as' => 'foodtype.show'
    ]);

    Route::get('restaurants',[
        'uses' => 'RestaurantController@showAll',
        'as' => 'restaurants'
    ]);

    Route::get('restaurant/{slug}',[
        'uses' => 'RestaurantController@show',
        'as' => 'restaurant.show'
    ]);

});

Route::group(['middleware' => 'administrator'], function(){

    Route::get('dashboard',[
        'uses' => 'AdminController@dashboard',
        'as' => 'admin.dashboard'
    ]);



});