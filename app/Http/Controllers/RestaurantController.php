<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show($slug){

        $restaurantToShow = Restaurant::where('slug', $slug)->first();

        return view('dashboard.restaurant')->with('restaurant', $restaurantToShow);

    }
}
