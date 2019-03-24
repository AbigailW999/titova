<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'titova') }}</title>-->
    <title>Titova</title>

    <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @section('styles')
    @show

    @section('scripts')
    @show
</head>
<body>
        <div class="menu">
            <a href="{{asset('/')}}" class="logo_img"><img src="{{ asset('img/logo.svg') }}" alt="DARIA TITOVA"></a>
                <div class="menu__menu-links">
                    <div><img src="{{ asset('img/vector.png') }}"><a href="{{asset('about_me')}}">ОБО МНЕ</a></div>
                    <div><img src="{{ asset('img/vector.png') }}"><a href="{{asset('notes')}}">ЗАМЕТКИ</a></div>
                    <div><img src="{{ asset('img/vector.png') }}"><a href="{{asset('price')}}">ЦЕНЫ</a></div>
                    <div><img src="{{ asset('img/vector.png') }}"><a class="contact_link" href="{{asset('contact')}}">КОНТАКТЫ</a></div>
                    <div class="invisible">Instagram</div>
                </div>
            <a class="menu__instagram" href="https://www.instagram.com/titova_wow/">Instagram</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
</body>
</html>
