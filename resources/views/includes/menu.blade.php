<div class="ui secondary pointing menu">
    @if(isset($homeActive) && $homeActive)
        <a class="active item" href="{{route('home')}}">
    @else
        <a class="item" href="{{route('home')}}">
    @endif
        Home
        </a>
    @if(Auth::check())
        @if(isset($foodTypeActive) && $foodTypeActive)
            <a class="item active" href="{{route('foodtype')}}">
        @else
            <a class="item" href="{{route('foodtype')}}">
        @endif
            Food types
        </a>
            Friends
        </a>
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