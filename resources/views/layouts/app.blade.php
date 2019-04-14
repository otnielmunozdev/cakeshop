<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CakeShop') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Margarine|Oswald|Srisakdi|Sniglet|Pacifico|Nunito" rel="stylesheet"> 


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('css/sucursales.css') }}">
    <link rel="stylesheet" href="{{ asset('css/promociones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/informacion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/appmenu.css') }}">
</head>


<body>
    <div class="container text-center d-md-none d-lg-block">
        <span style="color: red; font-family: Arial;" class="mr-4"> Servicio a Domicilio    </span><span style="color: green; font-family: Luna;" class="mr-4">SIN COSTO EN ÁREA LIMITADA Y EN COMPRAS MAYORES A $200.</span><span style="color: blue; font-family: Helvetica;"> Sujeto a disponibilidad en sucursales.<span>        
    </div>



    {{--Navegacion--}}
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light sticky-top text-center" id="menu">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- config('app.name', 'Pasteleria') --}}
                    <img src="{{ asset('img/logo.png') }}" alt="pasteleria" width="100px"  class="d-inline-block align-top" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" id="hamburguesa">
                        Men&uacute; <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="menunav">
                        <!-- Authentication Links -->
                        <li>
                            <a href="{{ action('PaginasController@informacion') }}" class="nav-link">Con&oacute;cenos</a>{{-- apunta al controlador metodo --}}             
                        </li>
                        <li  class="nav-item dropdown">
                            <a href="{{ action('PaginasController@productos') }}" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                            </a>      
                            <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Pasteles</a>
                                <a class="dropdown-item" href="#">Galletas</a>
                                <a class="dropdown-item" href="#">Muffins</a>
                                <a class="dropdown-item" href="#">Pays</a>
                                <a class="dropdown-item" href="#">Gelatinas</a>   
                            </div>
                        </li>
                        <li>
                            <a href="{{ action('SucursalController@mostrarSucursalVistaUsuario') }}" class="nav-link">Sucursales</a>         
                        </li>
                        <li>
                            <a href="{{ action('PaginasController@promociones') }}" class="nav-link">Promociones</a>         
                        </li>
                        
                        <li>
                            <a href="{{ action('PaginasController@contacto') }}" class="nav-link">Contacto</a>         
                        </li>

                        
                        <li  class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cuenta
                            </a>      
                            <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                @guest
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{--fin de navegacion--}}

        <div class="w-100"></div>

        <main class="">
                @yield('content') <!--aqui inicia la seccion -->
        </main>
    </div>
    
</body>
</html>
