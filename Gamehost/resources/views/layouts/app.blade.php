<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Токен -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test</title>

    <!-- Скрипты -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/slider.js') }}" defer></script>

    <!-- Шрифты -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Стили -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="../../../public/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Логотип -->
                <a class="navbar-brand" style="width: 130px"  href="{{ url('/') }}">
                    <img style="height: 40px;" src="{{asset('favicon.ico')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Центральное меню -->
                <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto me-auto">
                        <li class="nav-item">
                            <a href="{{url('about')}}" class="nav-link">О нас</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{url('contacts')}}" class="nav-link">Где нас найти?</a>
                        </li>
                        
                    </ul>
                   
                    <!-- Меню справа -->
                    <ul class="navbar-nav ">

                        <!-- Кнопки авторизации -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else

                        @if(Auth::user())
                        
                        <li class="nav-item">
                            <a href="{{url('profile')}}" class="nav-link">Профиль</a>
                        </li> 
                       
                    @if((Auth::user()->isAdmin))
                        <a class="nav-link" href="{{url('admin')}}">
                            Админ Панель
                        </a>
                    @endif
                @endif
                        
                          
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
