@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-6 justify-content-center mx-auto">
        <div class="card">
            <div class="card-header text-center justify-content-center">
                Update restaurant : {{$restaurant->name}}
            </div>
            <div class="card-body">
                <form action="{{route('restaurant.update', ['id' => $restaurant->id])}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="foodtype">Select food type</label>
                        <select name="food_type_id" id="foodtype" class="form-control">
                            @foreach($foodtypes as $foodtype)
                                <option value="{{$foodtype->id}}"
                                        @if($restaurant->foodType->id == $foodtype->id)
                                        selected
                                        @endif
                                >{{$foodtype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required value="{{$restaurant->name}}"/>
                    </div>
                    <div class="form-group text-center">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" required rows="8">
                            {{$restaurant->description}}
                        </textarea>
                    </div>
                    <div class="form-group text-center">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" required value="{{$restaurant->address}}"/>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update restaurant</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection