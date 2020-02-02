<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de notas')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="{{ url('/') }}" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item {{ url()->current() == url('productos') ? 'active' : '' }}">
                        <a href="{{ url('productos') }}" class="main-nav-link">
                            <span>Productos</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer class="foot">
            <div class="ad">
                <p>
                    Este layout fue desarrollado para los cursos de Styde.
                    <a href="https://styde.net/cursos/">Ver cursos</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2019 Derechos Reservados - Styde Limited</p>
            </div>
        </footer>
    </div>
</body>
</html>
