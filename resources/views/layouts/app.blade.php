<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Varmegyek') }}</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--<script type="module" src="{{ asset('js/bootstrap.js') }}"></script>-->
    <!--<script type="module" src="{{ asset('js/vue.global.js') }}"></script>-->
    <!--<script type="module" src="{{ asset('js/app.js') }}"></script>-->
    <script src="{{ asset('build/assets/app-c75e0372.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="{{ asset('js/varmegyek.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/varmegyek.css') }}" type="text/css" rel="stylesheet">
    <style type="text/css">
        i{
            font-size: 20px !important;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
<div id="app">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-home"></i></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li><button><a href="{{route('varmegyek.index')}}">Megyék</a></li></button>&nbsp;
                       </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-center">
            {{ config('app.name', 'Varmegyek') }} v{{ env('APP_VERSION') }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</body>
</html>

