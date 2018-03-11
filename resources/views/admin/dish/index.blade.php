@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-10 justify-content-center mx-auto">
        <h2>{{$menu -> restaurant -> name}}, {{$menu->name}}</h2>
        <div class="card">
            <div class="card-header text-center">
                <h3>Add a dish</h3>
            </div>
            <div class="card-body justify-content-center">
                <form class="form-group justify-content-center" action="{{route('dish.store', ['menu_id' => $menu->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="row form-group justify-content-center">
                        <div class="input-group col-lg-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Dish name</span>
                            </div>
                            <input name="name" type="text" class="form-control" placeholder="name" aria-label="Dish name"
                                   aria-describedby="basic-addon1" required/>
                        </div>
                        <div class="input-group col-lg-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Price</span>
                            </div>
                            <input name="price" type="number" class="form-control" placeholder="Price"
                                   aria-label="Dish price"
                                   aria-describedby="basic-addon1" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Add dish to current menu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table class="ui sortable celled table">
            <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Editing</th>
            <th>Deleting</th>
            </thead>
            <tbody>@if($dishes->count() > 0)
                @foreach($dishes as $dish)
                    <tr>
                        <td>{{$dish -> name}}</td>
                        <td>{{$dish -> price}}</td>
                        <td>
                            <a href="{{route('dish.edit', ['id' => $dish->id])}}" class="btn btn-info">
                                <span class="fa fa-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('dish.delete', ['id' => $dish->id])}}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No dishes found.</th>
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
