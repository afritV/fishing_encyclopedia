<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Рыболовный сайт</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/dist/css/main.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header>

    <div class=" container">
        <!-- Navbar -->
        <nav class="navbar-custom-style navbar navbar-expand">
            <!-- Left navbar links -->
            <ul class=" navbar-nav">
                <li><h1 class="logo"><a href="{{route('home.index')}}"><img src="/admin/dist/img/animal-1299070.svg"
                                                                            alt="fishing">fishing-encyclopedia</a>
                    </h1></li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('home.index')}}" class="nav-link">Главная</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Категории</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn-user btn btn-outline-primary me-2 mr-1"
                               href="{{ route('login') }}">{{ __('Войти') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn-user btn btn-outline-primary me-2"
                               href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class=" nav-link dropdown-toggle " href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-user" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->name === 'admin')
                                <a class="dropdown-item" href="{{ route("home-admin") }}"> Админ Панель</a>
                            @endif

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
        </nav>
    </div>
</header>

<section class="content">
    @yield('content')
</section>

<footer class="text-center">
    <i> oct 2020.</i>
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
{{--<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>


</body>
</html>
