@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-6 justify-content-center mx-auto">
        <div class="card">
            <div class="card-header text-center justify-content-center">
                Update food type : {{$foodtype->name}}
            </div>
            <div class="card-body">
                <form action="{{route('foodtype.update', ['id' => $foodtype->id])}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required value="{{$foodtype->name}}"/>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update food type</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection