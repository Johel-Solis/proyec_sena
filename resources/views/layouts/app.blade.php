<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


    @yield('estilos')

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">

    <script src="{{asset('assets/js/generalScripts.js') }}"></script>
    <link href="{{asset('assets/css/styles.css') }}" rel="stylesheet">

</head>



<body id="page-top" style="background-image: url('/assets/img/Background_pattern.png');">
    <nav class="navbar navbar-light navbar-expand-lg sticky-top " id="mainNav" style="background: #2c2a2d; position: relative;">
         <a class="navbar-brand js-scroll-trigger"  href="{{ url('/') }}">
           Sena
        </a>

         <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
             type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                 class="fa fa-align-justify"></i></button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
            @auth
                 <li class="nav-item dropdown">
                     <a class="nav-link text-secondary dropdown-toggle menu-option" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ambiente</a>
                     <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('ambientes.create') }}">Adicionar</a>
                         <a class="dropdown-item" href="{{ route('ambientes.index') }}">Listar</a>
                     </div>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link text-secondary dropdown-toggle menu-option" id="navbarDropdown-4" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Periodo Academico</a>
                     <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('periodo-academicos.create') }}">Adicionar</a>
                         <a class="dropdown-item" href="{{ route('periodo-academicos.index') }}">Listar</a>
                     </div>
                 </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link text-secondary dropdown-toggle menu-option" id="navbarDropdown-4" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Horario</a>
                    <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('horarios.create') }}">Adicionar</a>
                        <a class="dropdown-item" href="{{ route('horarios.index') }}">Listar</a>
                    </div>
                </li>

            @endauth
             </ul>
             <ul class="navbar-nav ml-auto">
            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a  class="nav-link text-secondary menu-option" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-secondary menu-option" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
            @else
                    <li class="nav-item dropdown">
                        <a class="nav-link text-secondary dropdown-toggle menu-option" id="navbarDropdown-1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                    </li>
            @endguest
             </ul>
         </div>
     </nav>

        <div >
            @yield('content')
        </div>
    </div>

    <script src="{{asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets/js/creative.js') }}"></script>
    @yield('scripts')
</body>
</html>
