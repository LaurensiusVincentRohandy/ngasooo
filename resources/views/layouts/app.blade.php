<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Ngasooo') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage/images/logo-kotak.png') }}" style="height: 8vh;">
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <!-- Footer -->
        <footer class="bg-white">
            <div class="container py-5">
                <div class="row py-4">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <p class="text-muted">Follow Us</p>
                        <ul class="list-inline mt-4">
                            <li class="list-inline-item">
                                <img src="{{ asset('storage/images/ig-logo.png') }}" style="height: 8vh;">
                                <a href="#" target="_blank" title="twitter"></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"></a></li>
                            <li class="list-inline-item">
                                <!-- <img src="{{ asset('storage/images/ig-logo.png') }}" style="height: 8vh;"> -->
                                <a href="#" target="_blank" title="instagram"></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                        <p class="text-muted mb-4">Subscribe to Our Newsletter!</p>
                        <div class="p-1 rounded border">
                            <div class="input-group">
                                <input type="email" placeholder="Enter your email address" class="form-control border-0 shadow-0">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-outline-primary btn-block">Subscribe</button>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <img src="{{ asset('storage/images/gplay-logo.png') }}" style="height: 15vh;">
                        <img src="{{ asset('storage/images/app-store-logo.png') }}" style="height: 15vh;">
                    </div>
                </div>
            </div>
        
            <!-- Copyrights -->
            <div class="bg-light py-4">
                <div class="container text-center">
                    <p class="text-muted mb-0 py-2">© 2021 Ngasooo All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- End -->
    </div>
</body>
</html>