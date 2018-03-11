<?php

namespace App\Http\Controllers;

use Auth;
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

    public function adminShowAll(){
        $foodtypes = FoodType::all();

        return view('admin.foodtype.index')
            ->with('adminFoodTypeActive', true)
            ->with('adminActive', true)
            ->with('foodtypes', $foodtypes);

    }

    public function create(){

        return view('admin.foodtype.create')
                    ->with('adminfoodTypeActive', true)
                    ->with('adminActive', true);
    }

    public function edit($id){
        $foodtypeToEdit = FoodType::find($id);

        return view('admin.foodtype.edit')
            ->with('foodtype', $foodtypeToEdit)
            ->with('adminFoodTypeActive', true)
            ->with('adminActive', true);
    }

    public function update(Request $request){

        $this->validate($request,[
            'name' => 'required'
        ]);

        $foodtypeToUpdate = FoodType::find($request->id);

        $foodtypeToUpdate->name = $request->name;

        $foodtypeToUpdate->save();

        return redirect()->back();

    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required'
        ]);

        FoodType::create([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'user_id' => Auth::id()
        ]);

        return redirect()->back();

    }

    public function delete($id){
        $foodtypeToDelete = FoodType::find($id);

        $foodtypeToDelete->delete();

        return redirect()->back();

    }
}
