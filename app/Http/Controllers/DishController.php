<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DishController extends Controller
{
    public function create(){

        return view('admin.dish.create')
            ->with('adminDishActive', true)
            ->with('adminActive', true);

    }

    public function store(Request $request){

    }
}
