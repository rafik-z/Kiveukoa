<?php

namespace App\Http\Controllers;

use Session;
use App\Dish;
use App\Menu;
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

        $dish = Dish::create([
           'name' => $request->name,
           'price' => $request->price,
           'menu_id' => $id,
            'user_id'=> Auth::id()
        ]);

        Session::flash('success', $dish->name . ' has been created.');

        return redirect()->back();

    }

    public function edit($id){

        $dishToEdit = Dish::find($id);
        $menus = Menu::where('restaurant_id', $dishToEdit->menu->restaurant->id)->get();

        Session::flash('success', $dishToEdit->name . ' has been edited.');

        return view('admin.dish.edit')
            ->with('dish', $dishToEdit)
            ->with('menus', $menus)
            ->with('adminDishActive', true)
            ->with('adminActive', true);

    }

    public function update(Request $request, $id){
        $dishToUpdate = Dish::find($id);

        $this->validate($request,[
            'name' => 'required',
            'price' => 'required|integer',
            'menu_id' => 'required'
        ]);

        $dishToUpdate->name = $request->name;
        $dishToUpdate->price = $request->price;
        $dishToUpdate->menu_id = $request->menu_id;

        $dishToUpdate->save();

        return redirect()
            ->route('dish.index', ['id' => $dishToUpdate->menu->id]);

    }

    public function delete($id){

        $dishToDelete = Dish::find($id);

        $dishToDelete->delete();

        return redirect()->back();

    }


}
