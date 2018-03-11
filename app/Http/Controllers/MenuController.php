<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{

    public function adminShowAll()
    {
        $menusToShow = Menu::all();

        return view ('admin.menu.index')
            ->with('menus', $menusToShow)
            ->with('adminMenuActive', true)
            ->with('adminActive', true);

    }

    public function create()
    {
        $restaurants = Restaurant::all();

        return view('admin.menu.create')
            ->with('restaurants', $restaurants)
            ->with('adminMenuActive', true)
            ->with('adminActive', true);

    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'restaurant_id' => 'required'
        ]);

        Menu::create([
            'name' => $request->name,
            'restaurant_id' => $request->restaurant_id,
            'user_id' => Auth::id()
        ]);

        $menusToShow = Menu::all();

        return view ('admin.menu.index')
            ->with('menus', $menusToShow)
            ->with('adminMenuActive', true)
            ->with('adminActive', true);

    }

    public function edit($id){
        $menuToEdit = Menu::find($id);
        $restaurants = Restaurant::all();

        return view ('admin.menu.edit')
            ->with('menu', $menuToEdit)
            ->with('restaurants', $restaurants)
            ->with('adminMenuActive', true)
            ->with('adminActive', true);

    }

    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'restaurant_id' => 'required'
        ]);

        $menuToUpdate = Menu::find($request->id);

        $menuToUpdate->name = $request->name;
        $menuToUpdate->user_id = Auth::id();
        $menuToUpdate->restaurant_id = $request->restaurant_id;

        $menuToUpdate->save();

        return redirect()->back();

    }

    public function delete($id){

        $menuToDelete = Menu::find($id);

        $menuToDelete->delete();

        return redirect()->back();

    }
}
