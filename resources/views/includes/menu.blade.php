<div class="ui secondary pointing menu">
    <a class="item
@if(isset($homeActive) && $homeActive)
            active
@endif
            " href="{{route('home')}}">
        Home
    </a><a class="item
@if(isset($foodTypeActive) && $foodTypeActive)
            active
@endif
            " href="{{route('foodtypes')}}">
        Food types
    </a>
    <a class="item
@if(isset($restaurantActive) && $restaurantActive)
            active
@endif
            " href="{{route('restaurants')}}">
        Restaurants
    </a>
    @if(Auth::check())
        <div class="right menu">

            <a class="ui item">
                Logout
            </a>
        </div>
    @else
        <div class="right menu">
            <a class="ui item" href="{{ route('login') }}">{{ __('Login') }}
            </a>
            <a class="ui item" href="{{ route('register') }}">{{ __('Register') }}
            </a>
        </div>
    @endif
</div>