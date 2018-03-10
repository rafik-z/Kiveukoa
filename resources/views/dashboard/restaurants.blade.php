@extends('layouts.app')

@section('menu')
    @include('includes/menu')
@endsection

@section('content')
    @foreach($restaurants as $restaurant)
        @if($restaurants->count() > 0)
            <div class="card m-5">
                <div class="card-header">
                    <a href="{{route('restaurant.show', ['slug' => $restaurant->slug])}}" style="text-decoration: none">
                        <h2
                                class="justify-content-center">{{$restaurant->name}}</h2></a>
                </div>

                <div class="card-body">
                    <div class="card-group">
                        @if($restaurant->menus->count() > 0)
                            @foreach($restaurant->menus as $menu)
                                <div class="card ml-2">
                                    <div class="card card-header">{{$menu->name}}</div>
                                    <div class="card-body">
                                        @if($menu->dishes->count() > 0)
                                            <p class="card-text">Plats disponibles : {{$menu->dishes->count()}}</p>
                                        @else
                                            <p class="card-text">Ce menu ne contient pas de plats.</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2 class="justify-content-center">Aucun menu enregistré pour ce restaurant.</h2>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <h2 class="text-center">Aucun restaurant.</h2>
        @endif
    @endforeach
@endsection
