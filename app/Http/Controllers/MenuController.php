<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create(){
        return view('admin.menu.create')
            ->with('adminMenuActive', true)
            ->with('adminActive', true);

    }

    public function store(Request $request){

    }
}
