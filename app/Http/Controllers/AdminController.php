<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard')->with('dashboardActive', true)->with('adminActive', true);
    }
}
