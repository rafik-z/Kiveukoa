@extends('admin.layouts.backoffice')
@section('admin_content')
    <div class="col-lg-4 justify-content-center mx-auto">
        <div class="card">
            <div class="card-header text-center justify-content-center">
                Create a new food type
            </div>
            <div class="card-body">
                <form action="{{route('foodtype.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group text-center">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Create food type</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-10 justify-content-center mx-auto">
        <table class="ui sortable celled table">
            <thead>
            <th>Name</th>
            <th>Editing</th>
            <th>Deleting</th>
            </thead>
            <tbody>@if($foodtypes->count() > 0)
                @foreach($foodtypes as $foodtype)
                    <tr>
                        <td>{{$foodtype -> name}}</td>
                        <td>
                            <a href="{{route('foodtype.edit', ['id' => $foodtype->id])}}" class="btn btn-info">
                                <span class="fa fa-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('foodtype.delete', ['id' => $foodtype->id])}}" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No food types.</th>
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
