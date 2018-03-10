<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Restaurant;
use App\FoodType;
use App\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodTypes = FoodType::all()->count();
        $restaurants = Restaurant::all()->count();
        $dishes = Dish::all()->count();
        $menus = Menu::all()->count();
        return view('home')
                    ->with('homeActive', true)
                    ->with('restaurants', $restaurants)
                    ->with('dishes', $dishes)
                    ->with('menus', $menus)
                    ->with('foodtypes', $foodTypes);
    }
}
