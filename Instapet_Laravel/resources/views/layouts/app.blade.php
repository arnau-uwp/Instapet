<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <style>

    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <input type="checkbox" id="burger-toggle">
    <label for="burger-toggle" class="burger-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    <div class="menu">
    <div class="menu-inner">
    <main class="site-wrapper">
    <div class="pt-table desktop-768">
        <div class="pt-tablecell page-home relative" style="background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
        background-position: center;
        background-size: cover;">
                        <div class="overlay"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                    <div class="page-title  home text-center">
                                    <span class="heading-page"> Welcome to My Page
                                    </span>
                                        <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>

                                    <div class="hexagon-menu clear">
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content"href="{{ url('/') }}">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-universal-access"></i>
                                                    </span>
                                                    <span class="title">home</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content" href="http://127.0.0.1:8000/home">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-bullseye"></i>
                                                    </span>
                                                    <span class="title">Landing page</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-braille"></i>
                                                    </span>
                                                    <span class="title"> Todo nombre con if</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>    
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-id-badge"></i>
                                                    </span>
                                                    <span class="title">{{ __('Logout') }}</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-life-ring"></i>
                                                    </span>
                                                    <span class="title">Works</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-clipboard"></i>
                                                    </span>
                                                    <span class="title">Testimonials</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                        <div class="hexagon-item">
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <div class="hex-item">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            <a  class="hex-content">
                                                <span class="hex-content-inner">
                                                    <span class="icon">
                                                        <i class="fa fa-map-signs"></i>
                                                    </span>
                                                    <span class="title">Contact</span>
                                                </span>
                                                <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
    </div>
  </div>
</div>









    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
