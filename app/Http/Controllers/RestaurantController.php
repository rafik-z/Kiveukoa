<?php

namespace App\Http\Controllers;

use Auth;
use App\FoodType;
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

        return view ('dashboard.restaurants')
            ->with('restaurants', $restaurantsToShow)
            ->with('restaurantActive', true);
    }

    public function adminShowAll(){
        $restaurantsToShow = Restaurant::all();

        return view ('admin.restaurant.index')
            ->with('restaurants', $restaurantsToShow)
            ->with('adminRestaurantActive', true)
            ->with('adminActive', true);
    }

    public function create(){

        $foodtypes = FoodType::all();

        return view ('admin.restaurant.create')
            ->with('adminRestaurantActive', true)
            ->with('adminActive', true)
            ->with('foodtypes', $foodtypes);

    }

    public function store(Request $request){

        $this->validate($request,[
            'foodtype_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);

        Restaurant::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'user_id' => Auth::id(),
            'food_type_id' => $request->foodtype_id,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->back();

    }
}
