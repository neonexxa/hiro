<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('MDB/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('MDB/css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('MDB/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <a class="navbar-brand" href="#">
                {{-- @include('logo') --}}
                <h1 class="white-text" style="font-family: 'Open Sans', sans-serif;text-shadow: 2px 2px black;"><strong>HIRO</strong></h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}" style="text-shadow: 2px 2px black;">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-shadow: 2px 2px black;">Pitching</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('rule') }}">Rules</a>
                            <a class="dropdown-item" href="{{ route('theme') }}">Themes</a>
                            <a class="dropdown-item" href="{{ route('prize') }}">Prizes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('faq')}}" style="text-shadow: 2px 2px black;">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="https://goo.gl/forms/WjV0XiwtMH5k9I7l1">Register Now!!</a>    
                    </li>
                    
                </ul>
            </div>
        </nav>

    
        {{-- <nav class="navbar navbar-default navbar-static-top">
            <div class="container"> --}}
                {{-- <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div> --}}

                {{--< div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div> --}}
            {{-- </div> 
        </nav> --}}

        @yield('content')
        <div class="#e1bee7 purple lighten-4 z-depth-3">
            @include( 'break' , [ 't' => 2 ] )
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <span style="font-family: 'Indie Flower', cursive;" class="purple-text">HIRO</span> <span class="white-text">| Her Idea Reach Out !</span>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-2">
                        <img class="animated flipInY infinite img-fluid" src="{{ asset('img/HIRO-no-background.png') }}">
                    </div>
                </div>
                @include( 'break' , [ 't' => 3 ] )
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('MDB/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('MDB/js/popper.min.js') }}"></script>
    <script src="{{ asset('MDB/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('MDB/js/mdb.min.js') }}"></script>
    <script>
        $('.dropdown-toggle').dropdown();
        $('.collapse').collapse();
    </script>
</body>
</html>
