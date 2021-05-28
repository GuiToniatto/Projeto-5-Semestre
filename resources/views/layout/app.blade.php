<!DOCTYPE html>
<html lang ="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        @yield('styles')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <title>Newba Club - @yield('title')</title>
    </head>
    <body>
        <div class="container">

            <div class="hamburguer">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
                <span>Fechar</span>
            </div>

            <header>
                <a class="logo" href="{{ route('home') }}"><img class="logo" src="icon/Logotipo.png" alt="logo"></a>
                <nav>
                    <ul class="nav_links">
                        <li><a href="{{ route('servicos') }}">Serviços</a></li>
                        <li><a href="{{ route('quemsomos') }}">Quem Somos</a></li>
                        <li><a href="{{ route('faleconosco') }}">Fale Conosco</a></li>
                    </ul>
                </nav>
                <a href="{{ route('carrinho') }}"><img class="carrinho" src="img/cart.png" width="50px" height="50px"></a>
                <a class="cta" href="{{ route('loginView') }}"><button>Login</button></a>
                <a class="cta" href="{{ route('logout') }}"><button>Logout</button></a>
            </header>

            <div class="sidebar">
                <nav>
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('facas') }}" class="menu-link">Facas</a></li>
                        <li class="menu-item"><a href="{{ route('luvas') }}" class="menu-link">Luvas</a></li>
                        <li class="menu-item"><a href="{{ route('rifles') }}" class="menu-link">Rifles</a></li>
                        <li class="menu-item"><a href="{{ route('pistola') }}" class="menu-link">Pistola</a></li>
                        <li class="menu-item"><a href="{{ route('sub') }}" class="menu-link">Sub</a></li>
                        <li class="menu-item"><a href="{{ route('escopeta') }}" class="menu-link">Escopeta</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        @yield('content')
    </body>

    <script src="js/script.js"></script>
    @yield('scripts')

</html>
