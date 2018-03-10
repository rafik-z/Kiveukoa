@extends('layouts.app')
@section('menu')
    @include('includes/menu', ['home' => true, 'foodtypeActive' => false])
@endsection
@section('content')
@include('admin/includes/adminMenu')
    @yield('admin_content')
@endsection
