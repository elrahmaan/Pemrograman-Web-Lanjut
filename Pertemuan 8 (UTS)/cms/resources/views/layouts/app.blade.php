<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- theme stylesheet-->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Custom icon font-->
    <link rel="stylesheet" href="/css/kuis1/fontastic.css">

    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    
    <!-- Fancybox-->
    <link rel="stylesheet" href="/vendor/@fancyapps/fancybox/jquery.fancybox.min.css">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/kuis1/style.default.css" id="theme-stylesheet">

    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="/img/Wonderful-Indonesia.png" width="120" height="33" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item {{Route::is('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item {{Route::is('blog') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="nav-item {{Route::is('gallery') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item {{Route::is('manage') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('manage') }}">Kelola</a>
                            </li>
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
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <main class="py-4"> -->
            @yield('content')
        <!-- </main> -->
    </div>
    
     <!-- Page Footer-->
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-light">Copyright &copy; Abdul Rahman Saleh 2020</p>
        <p class="m-0 text-center text-light">Pasuruan, Jawa Timur, Kode Pos 67156</p>
        <p class="m-0 text-center text-light">Phone: (+62) 812 3092 8718</p>
        <p class="m-0 text-center text-light">Email: <a href="mailto:1931710038@student.polinema.ac.id">1931710038@student.polinema.ac.id</a></p>
      </div>
    </footer>
     <!-- JavaScript files-->
     <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="/js/front.js"></script>
</body>
</html>
