@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-10 justify-content-center mx-auto">
        <div class="card">
            <div class="card-header text-center">
                <h3>Update dish</h3>
            </div>
            <div class="card-body justify-content-center">
                <form class="form-group justify-content-center" action="{{route('dish.update', ['id' => $dish->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="row form-group justify-content-center">
                        <div class="input-group col-lg-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Dish name</span>
                            </div>
                            <input name="name" type="text" class="form-control" placeholder="name" aria-label="Dish name"
                                   aria-describedby="basic-addon1" value="{{$dish->name}}" required/>
                        </div>
                        <div class="input-group col-lg-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Price</span>
                            </div>
                            <input name="price" type="number" class="form-control" placeholder="Price"
                                   aria-label="Dish price"
                                   aria-describedby="basic-addon1" value="{{$dish->price}}" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="menu_id">Select menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            @foreach($menus as $menu)
                                <option value="{{$menu->id}}"
                                        @if($dish->menu->id == $menu->id)
                                        selected
                                        @endif
                                >{{$menu->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update dish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
