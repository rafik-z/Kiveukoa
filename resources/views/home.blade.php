@extends('layouts.app')
@section('menu')
    @include('includes/menu', ['home' => true, 'foodtypeActive' => false])
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header justify-content-center">
                    Food types
                </div>
                <div class="card-body">
                    <h1 class="text-center">{{$foodtypes}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header justify-content-center">
                    Restaurants
                </div>
                <div class="card-body">
                    <h1 class="text-center">{{$restaurants}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header justify-content-center">
                    Dishes
                </div>
                <div class="card-body justify-content-center">
                    <h1 class="text-center">{{$dishes}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header justify-content-center">
                    Menus
                </div>
                <div class="card-body justify-content-center">
                    <h1 class="text-center">{{$menus}}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
