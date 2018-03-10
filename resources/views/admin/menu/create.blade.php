@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-4 justify-content-center mx-auto">
        <div class="card">
            <div class="card-header text-center justify-content-center">
                Create a new menu
            </div>
            <div class="card-body">
                <form action="{{route('menu.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Create menu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
