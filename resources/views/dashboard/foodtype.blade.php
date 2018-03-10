@extends('layouts.app')

@section('menu')
    @include('includes/menu')
@endsection

@section('content')
    @foreach($foodType->restaurants as $restaurant)
            <div class="card m-5">
                <div class="card-header">
                    <a href="{{route('restaurant.show', ['slug' => $restaurant->slug])}}" style="text-decoration: none">
                        <h2 class="justify-content-center">
                            {{$restaurant->name}}
                        </h2>
                    </a>
                </div>

                <div class="card-body">
                    <p class="card-text">{{$restaurant->description}}</p>
                    <div class="card-group">

                    </div>
                </div>
            </div>
    @endforeach
@endsection
