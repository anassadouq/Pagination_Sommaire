<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ZCMG</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size:21px">
                    🆉🅲🅼🅶
                </a>

                <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Cuisines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/placard">Placards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('salarier.index') }}">Salariés</a>
                        </li>
                        @if (Auth::user()->email == "younes@gmail.com")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('devis.index') }}">Devis</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fournisseur.index') }}">Fournisseur</a>
                        </li>
                        @if (Auth::user()->email == "younes@gmail.com")
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reglement.index') }}">Règlements</a>
                        </li>
                        @endif
                    </ul>
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
                                <div aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
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