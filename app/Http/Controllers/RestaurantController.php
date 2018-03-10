<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show($slug){

        $restaurantToShow = Restaurant::where('slug', $slug)->first();

        return view('dashboard.restaurant')->with('restaurant', $restaurantToShow)->with('restaurantActive', true);

    }

    public function showAll(){
        $restaurantsToShow = Restaurant::all();

        return view ('dashboard.restaurants')->with('restaurants', $restaurantsToShow)->with('restaurantActive', true);
    }

    public function create(){

        return view ('admin.restaurant.create')
            ->with('adminRestaurantActive', true)
            ->with('adminActive', true);

    }

    public function store(Request $request){

    }
}
