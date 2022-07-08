<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Otelo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Otelo') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    <ul style="width: 100%; height: 100%; border: 100%" class="navbar-nav mr-auto">
                        <div class="btn-toolbar">
                            @if(Auth::check())
                                <button class="btn btn-primary" style="background-color:Blue ; border-color:blue ; color:white" onclick="javascript:document.location.href='/accueil'">Accueil</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"   onclick="javascript:document.location.href='/deconnexion'">Deconnexion</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"  onclick="javascript:document.location.href='/newreservation'">Reservation</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"  onclick="javascript:document.location.href='/indexformulaire2'">AfficherHara</button>
                            @endif
                            
                            @if(!Auth::check())
                                <button class="btn btn-primary" style="background-color:Blue ; border-color:blue ; color:white" onclick="javascript:document.location.href='/accueil'">Accueil</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"  onclick="javascript:document.location.href='login'">Connexion</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"  onclick="javascript:document.location.href='/newreservation'">Reservation</button>
                                <button class="btn btn-primary btn-sm" style="background-color:Blue ; border-color:blue ; color:white"  onclick="javascript:document.location.href='/register'">Inscription</button>
                                <button class="btn btn-primary btn-sm"  style="background-color:Blue ; border-color:blue ; color:white" onclick="javascript:document.location.href='/indexformulaire2'">AfficherHara</button>
                            @endif

                            
                            <button type="button" id="btnAvis" style="background-color:Blue ; border-color:blue ; color:white" class="btn btn-primary btn-sm">Avis</button>
                        </div>

                    </ul>





                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @include ('incs.footer')
        </main>
    </div>
</body>
</html>


