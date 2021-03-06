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
    <a class="item" href="{{route('restaurants')}}">
        Servings
    </a>
    @if(Auth::check())
        <div class="right menu">
            @if(Auth::user()->administrator)
                <a href="{{route('admin.dashboard')}}" class="
@if(isset($adminActive) && $adminActive)
                        active
            @endif
                        ui item">Admin Dashboard</a>
            @endif
            <a href="{{ route('logout') }}" class="ui item"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
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