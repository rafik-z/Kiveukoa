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

    // Foodtype routes

    Route::get('foodtypes', [
        'uses' => 'FoodTypeController@adminShowAll',
        'as' => 'foodtype.index'
    ]);

    Route::get('foodtype/create', [
        'uses' => 'FoodTypeController@create',
        'as' => 'foodtype.create'
    ]);

    Route::post('foodtype/store/new', [
        'uses' => 'FoodTypeController@store',
        'as' => 'foodtype.store'
    ]);

    Route::get('foodtype/{id}/edit', [
        'uses' => 'FoodTypeController@edit',
        'as' => 'foodtype.edit'
    ]);

    Route::post('foodtype/{id}/update', [
        'uses' => 'FoodTypeController@update',
        'as' => 'foodtype.update'
    ]);

    Route::get('foodtype/{id}/delete',[
        'uses' => 'FoodTypeController@delete',
        'as' => 'foodtype.delete'
    ]);

    // Restaurant routes

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

    // Menu routes

    Route::get('menus',[
        'uses' => 'MenuController@adminShowAll',
        'as' => 'menu.index'
    ]);

    Route::get('menu/create', [
        'uses' => 'MenuController@create',
        'as' => 'menu.create'
    ]);

    Route::post('menu/store/new', [
        'uses' => 'MenuController@store',
        'as' => 'menu.store'
    ]);

    Route::get('menu/{id}/edit', [
        'uses' => 'MenuController@edit',
        'as' => 'menu.edit'
    ]);

    Route::post('menu/{id}/update', [
        'uses' => 'MenuController@update',
        'as' => 'menu.update'
    ]);

    Route::get('menu/{id}/delete',[
        'uses' => 'MenuController@delete',
        'as' => 'menu.delete'
    ]);

    // Dish routes

    Route::get('menu/{id}/dishes',[
        'uses' => 'MenuController@showDishes',
        'as' => 'dish.index'
    ]);

    Route::post('dish/{id}/store', [
        'uses' => 'DishController@store',
        'as' => 'dish.store'
    ]);

    Route::get('dish/{id}/edit', [
        'uses' => 'DishController@edit',
        'as' => 'dish.edit'
    ]);

    Route::post('dish/{id}/update', [
        'uses' => 'DishController@update',
        'as' => 'dish.update'
    ]);

    Route::get('dish/{id}/delete',[
        'uses' => 'DishController@delete',
        'as' => 'dish.delete'
    ]);
});