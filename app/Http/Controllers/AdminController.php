<?php

namespace App\Http\Controllers;

use App\Dish;
use App\FoodType;
use App\Menu;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard')
            ->with('foodtypes', FoodType::all()->count())
            ->with('restaurants', Restaurant::all()->count())
            ->with('dishes', Dish::all()->count())
            ->with('menus', Menu::all()->count())
            ->with('users', User::all()->count())
            ->with('dashboardActive', true)
            ->with('adminActive', true);
    }
}
