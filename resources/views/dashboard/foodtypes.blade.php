@extends('layouts.app')

@section('menu')
    @include('includes/menu')
@endsection

@section('content')
    @foreach($foodTypes as $foodType)
        @if($foodType->restaurants->count() > 0)
            <div class="card m-5">
                <div class="card-header">
                    <a href="{{route('foodtype.show', ['slug' => $foodType->slug])}}" style="text-decoration: none"><h2 class="justify-content-center">{{$foodType->name}}</h2></a>
                </div>

                <div class="card-body">
                    <div class="card-group">
                        @foreach($foodType->restaurants as $restaurant)
                            <div class="card ml-2">
                                <div class="card card-header"></div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$restaurant->name}}</h5>
                                    <p class="card-text">{{str_limit($restaurant->description, 100 )}}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{$restaurant->address}}</small>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
