@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-10 justify-content-center mx-auto">
        <table class="ui sortable celled table">
            <thead>
            <th>Name</th>
            <th>Restaurant</th>
            <th>Foodtype</th>
            <th>Dishes</th>
            <th>Editing</th>
            <th>Deleting</th>
            </thead>
            <tbody>@if($menus->count() > 0)
                @foreach($menus as $menu)
                    <tr>
                        <td>{{$menu -> name}}</td>
                        <td>{{$menu -> restaurant -> name}}</td>
                        <td>{{$menu -> restaurant -> foodType -> name}}</td>
                        <td>
                            <a href="{{route('dish.index', ['id' => $menu->id])}}" class="btn btn-info">
                                <span class="fa fa-list-ul"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('menu.edit', ['id' => $menu->id])}}" class="btn btn-info">
                                <span class="fa fa-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('menu.delete', ['id' => $menu->id])}}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No menus found.</th>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/sortedList.js') }}"></script>
    <script>$('table').tablesort()</script>
@endsection
