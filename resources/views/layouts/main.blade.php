<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield ('title')</title>

        <!--Css do Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


       <!--Font do Google-->'
       <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">



        <!--Css da App-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">

        <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a class="nav-link" href="/">
            <img src="/img/hdcevents_logo.svg" alt="HDCEvents Banner">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/events/create">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Cadastrar</a>
                </li>

            </ul>

        </div>




        </nav>

        </header>
            @yield('content')
        <footer>
            <p>HDC Events &copy; 2021</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
