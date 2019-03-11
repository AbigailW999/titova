<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @section('styles')
    @show
</head>
<body>
        <div class="menu">
            <a href="{{asset('/')}}"><img src="{{ asset('img/logo.svg') }}" alt="DARIA TITOVA"></a>
                <div class="menu__menu-links">
                    <a href="{{asset('about_me')}}">ОБО МНЕ</a>
                    <a href="{{asset('notes')}}">ЗАМЕТКИ</a>
                    <a href="{{asset('price')}}">ЦЕНЫ</a>
                    <a href="{{asset('contact')}}">КОНТАКТЫ</a>
                </div>
            <a class="menu__instagram" href="https://www.instagram.com/titova_wow/">Instagram</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
</body>
</html>
