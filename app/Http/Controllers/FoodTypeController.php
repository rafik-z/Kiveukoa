<?php

namespace App\Http\Controllers;

use App\FoodType;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    public function showAll(){
        $foodTypes = FoodType::all();
        return view('dashboard.foodtypes')
                    ->with('foodTypeActive', true)
                    ->with('foodTypes', $foodTypes);
    }

    public function show($slug){
        $foodTypeToShow = FoodType::where('slug', $slug)->first();

        return view ('dashboard.foodtype')
                    ->with('foodType', $foodTypeToShow);
    }
}