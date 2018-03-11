<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/semantic.min.css')}}">
    @yield('styles')
</head>
<body>
<div id="app">
    @yield('menu')
    <div class="container">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/semantic.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
</script>
@yield('scripts')
</body>
</html>