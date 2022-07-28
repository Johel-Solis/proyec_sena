<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="{{assert('js/generalScripts.js') }}"></script>
    <script src="{{assert('js/jquery.min.js') }}"></script>
    <script src="{{assert('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="{{assert('js/creative.js') }}"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="{{ assert('css/fonts/font-awesome.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{assert('css/styles.css') }}" rel="stylesheet">
</head>



<body id="page-top" style="background-image: url('/assert/img/Background_pattern.png');">
    <nav class="navbar navbar-light navbar-expand-lg sticky-top " id="mainNav" style="background: #2c2a2d; position: relative;">
         <a class="navbar-brand js-scroll-trigger"  href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        <img src="{% static 'papeleria/img/S_S_Icon.svg' %}"
                 width="118" height="53"></a>

         <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right"
             type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                 class="fa fa-align-justify"></i></button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
            @auth
                 <li class="nav-item dropdown">
                     <a class="nav-link text-secondary dropdown-toggle menu-option" id="navbarDropdown-3" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">horario</a>
                     <div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{% url 'add-customer-view' %}">Adicionar</a>

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
