@extends('layouts.app')
@section('menu')
    @include('includes/menu', ['home' => true, 'foodtypeActive' => false])
@endsection
@section('content')
    <div class="row">
        ADMIN
    </div>
@endsection
