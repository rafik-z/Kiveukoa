@extends('layouts.app')
@section('menu')
    @include('includes/menu', ['home' => true, 'foodtypeActive' => false])
@endsection
@section('content')
    <div class="row">
        <h2>Hellow!</h2>
    </div>
@endsection
