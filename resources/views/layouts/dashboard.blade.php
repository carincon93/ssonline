<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="sidebar">
            <div id="sidebar-logo">
                <img src="{{ asset('images/logo-gris.png') }}" alt="logo" class="img-responsive">
            </div>
            @if(Auth::check() && Auth()->user()->rol == 'admin')
            <ul class="list-unstyled nav-sidebar">
                <li><a href="{{ url('/admin/usuarios') }}">Usuarios</a></li>
                <li><a href="{{ url('/admin/servicios') }}">Servicios</a></li>
                <li><a href="{{ url('/admin/politicas') }}">Políticas de seguridad</a></li>
                <li class="group-list">Mi usuario</li>
                <li class="dropdown">
                    <img src="{{ asset(Auth::user()->foto) }}" alt="" class="img-responsive foto-perfil center-block">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        @if( Auth::user()->rol == 'admin')
                        <li>
                            <a href="{{ url('/admin/usuarios/' . Auth::user()->id) . '/edit' }}" class="not-background text-uppercase">Editar perfil</a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}" class="not-background text-uppercase">Página principal</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/home') }}" class="not-background text-uppercase">Dashboard</a>
                        </li>
                        @endif
                        <li>
                            <a class="not-background text-uppercase" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @else
            <div class="">
                <img src="{{ asset(Auth::user()->foto) }}" alt="" class="img-responsive foto-perfil center-block">
                <ul class="list-unstyled">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-center user-name text-capitalize" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/') }}" class="not-background text-uppercase">Página principal</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/home') }}" class="not-background text-uppercase">Dashboard</a>
                            </li>
                            <li>
                                <a class="not-background text-uppercase" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

                </ul>
            </div>
            @endif
        </nav>
        <div class="dashboard-wrapper">
            @yield('content')
        </div>


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/master.js') }}" charset="utf-8"></script>
    @stack('scripts')
</body>
</html>
