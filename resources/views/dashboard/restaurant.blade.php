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

        @if($restaurant->menus->count() >0)
        @foreach($restaurant->menus as $menu)
            <div class="card">
                <div class="card-header">{{$menu->name}}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($menu->dishes as $dish)
                            <li class="list-group-item">
                                {{$dish->name}} / {{$dish->price}}
                            </li>
                            @endforeach
                    </ul>

                </div>
            </div>
        @endforeach
        @else
            <h2 class="text-center">Ce restaurant ne dispose actuellement pas d'un menu.</h2>

        @endif
    </div>
@endsection
