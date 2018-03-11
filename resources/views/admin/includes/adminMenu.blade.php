<div class="col-lg-8">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link @if(isset($dashboardActive) && $dashboardActive)
                    active
                    @endif
                    " href="{{route('admin.dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
            <a class=" @if(isset($adminFoodTypeActive) && $adminFoodTypeActive)
                    active
                    @endif
                    nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food type</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('foodtype.create')}}">Create</a>
                <a class="dropdown-item" href="{{route('foodtype.index')}}">Manage</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Statistics</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class=" @if(isset($adminRestaurantActive) && $adminRestaurantActive)
                    active
                    @endif
                    nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurant</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('restaurant.create')}}">Create</a>
                <a class="dropdown-item" href="{{route('restaurant.index')}}">Manage</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Statistics</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class=" @if(isset($adminMenuActive) && $adminMenuActive)
                    active
                    @endif
                    nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('menu.create')}}">Create</a>
                <a class="dropdown-item" href="{{route('menu.index')}}">Manage</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Statistics</a>
            </div>
        </li>
    </ul>
</div>
<br>