<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/compile.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>@yield('title')</title>
    <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1024;
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>

    <section id="main-header">    
        <nav id="myHeader" class="navbar navbar-expand-lg navbar-light main-bg py-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo/logo.png')}}" alt="logo">
                </a>         
                <form class="form-inline my-2 my-lg-0 search-content" action="{{ route('app.listings') }}">
                    <input name="search" value="{{ Request::input('search') }}" class="form-control mr-0" type="search" placeholder="Keywords" aria-label="Search">
                    <div class="dropdown dropdown-custom">
                        <button class="btn dropdown-toggle text-capitalize m-0 z-depth-0 rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All categories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <button class="btn btn-search white-text my-2 my-sm-0 mx-0 z-depth-0 text-capitalize" type="submit">Search</button>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'app.index' ? 'active' : '' }}" href="{{ route('app.index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() == 'app.listings' || Route::currentRouteName() == 'app.listing' ? 'active' : '' }}" href="{{ route('app.listings') }}">Listings</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() == 'register' ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
    </section>

    <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>