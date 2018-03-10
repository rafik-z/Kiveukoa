@extends('admin.layouts.backoffice')
@section('admin_content')


    <div class="col-lg-10 justify-content-center mx-auto">
    <table class="ui sortable celled table">
        <thead>
        <th>
            Restaurant name
        </th>
        <th>Food type</th>
        <th>Editing</th>
        <th>Deleting</th>
        </thead>
        <tbody>@if($restaurants->count() > 0)
            @foreach($restaurants as $restaurant)
                <tr>
                    <td>{{$restaurant -> name}}</td>
                    <td>{{$restaurant -> foodType -> name}}</td>
                    <td>
                        <a href="" class="btn btn-info">
                            <span class="fa fa-edit"></span>
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <th colspan="5" class="text-center">No categories.</th>
            </tr>
        @endif
        </tbody>
        <tfoot>
        <tr><th>3 People</th>
            <th>2 Approved</th>
            <th></th>
        </tr></tfoot>
    </table>
    </div>

    <div class="col-lg-10 justify-content-center mx-auto">
        <table class="table table-hover">
            <thead>
            <th>
                Restaurant name
            </th>
            <th>Food type</th>
            <th>Editing</th>
            <th>Deleting</th>
            </thead>
            <tbody>
            @if($restaurants->count() > 0)
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant -> name}}</td>
                        <td>{{$restaurant -> foodType -> name}}</td>
                        <td>
                            <a href="" class="btn btn-info">
                                <span class="fa fa-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No categories.</th>
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
