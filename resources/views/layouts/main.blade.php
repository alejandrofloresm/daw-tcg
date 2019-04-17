<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TCG</title>
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}" />
</head>
<body>
    <!-- START NAV -->
    <nav class="navbar is-white">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="{{ route('homepage') }}">
                    TCG
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('homepage') }}">
                        Inicio
                    </a>
                    <a class="navbar-item" href="{{ route('reports.index') }}">
                        Reportes
                    </a>
                </div>

            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
