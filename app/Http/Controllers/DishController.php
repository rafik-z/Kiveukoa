<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{

    public function adminShowAll()
    {
        $dishesToShow = Dish::all();

        return view('admin.dish.index')
            ->with('dishes', $dishesToShow)
            ->with('adminDishActive', true)
            ->with('adminActive', true);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request,[
           'name' => 'required',
           'price' => 'required|integer'
        ]);

        Dish::create([
           'name' => $request->name,
           'price' => $request->price,
           'menu_id' => $id,
            'user_id'=> Auth::id()
        ]);

        return redirect()->back();

    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function delete($id){

    }


}
