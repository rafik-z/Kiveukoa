@extends('layouts.app')

@section('menu')
    @include('includes/menu')
@endsection

@section('content')
    <div class=" m-5">
        <a href="{{route('restaurant.show', ['slug' => $restaurant->slug])}}" style="text-decoration: none">
            <h2 class="justify-content-center">
                {{$restaurant->name}}
            </h2>
        </a>

        <div class="card-body">
            <p class="card-text">{{$restaurant->description}}</p>
            <div class="card-group">

            </div>
        </div>

        @if($restaurant->menus->count() >0){
        @foreach($restaurant->menus as $menu)
        @endforeach
        @else
                
        @endif
    </div>
@endsection
