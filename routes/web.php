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

    Route::get('restaurants', [
        'uses' => 'RestaurantController@showAll',
        'as' => 'restaurants'
    ]);

    Route::get('restaurant/{slug}', [
        'uses' => 'RestaurantController@show',
        'as' => 'restaurant.show'
    ]);

});

Route::group(['prefix' => 'admin', 'middleware' => 'administrator'], function () {

    Route::get('dashboard', [
        'uses' => 'AdminController@dashboard',
        'as' => 'admin.dashboard'
    ]);

    Route::get('foodtype/create', [
        'uses' => 'FoodTypeController@create',
        'as' => 'foodtype.create'
    ]);

    Route::post('foodtype/store', [
        'uses' => 'FoodTypeController@store',
        'as' => 'foodtype.store'
    ]);

    Route::get('restaurants', [
        'uses' => 'RestaurantController@adminShowAll',
        'as' => 'restaurant.index'
    ]);

    Route::get('restaurant/create', [
        'uses' => 'RestaurantController@create',
        'as' => 'restaurant.create'
    ]);

    Route::post('restaurant/store/new', [
        'uses' => 'RestaurantController@store',
        'as' => 'restaurant.store'
    ]);

    Route::get('restaurant/{id}/edit', [
        'uses' => 'RestaurantController@edit',
        'as' => 'restaurant.edit'
    ]);

    Route::post('restaurant/{id}/update', [
        'uses' => 'RestaurantController@update',
        'as' => 'restaurant.update'
    ]);

    Route::get('restaurant/{id}/delete',[
        'uses' => 'RestaurantController@delete',
        'as' => 'restaurant.delete'
    ]);

    Route::get('menu/create', [
        'uses' => 'MenuController@create',
        'as' => 'menu.create'
    ]);

    Route::post('menu/store/new', [
        'uses' => 'MenuController@store',
        'as' => 'menu.store'
    ]);

    Route::get('dish/create', [
        'uses' => 'DishController@create',
        'as' => 'dish.create'
    ]);

    Route::post('dish/store/new', [
        'uses' => 'DishController@store',
        'as' => 'dish.store'
    ]);

});