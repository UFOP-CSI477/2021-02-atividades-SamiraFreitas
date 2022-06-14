<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Roboto" rel="stylesheet">
        <!-- Css Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Css da aplicação -->

       <link rel='stylesheet' href='/css/styles.css'>
       <script src='/js/scripts.js'></script>
    </head>
    <body >
        <header>
            <nav class='navbar navbar-expand-lg navbar-light'>
                <div class='collapse navbar-collapse' id='navbar'>
                    <a href='/' class='navbar-brand'> 
                        <img src='/img/logo.png' alt='logo'>
                     </a>
                     <ul class='navbar-nav'>
                        <li class='nav-item'>
                        <a href='/' class='navbar-brand'> Equipamentos</a>
                        </li>
                        <li class='nav-item'>
                        <a href='/equipamentos/create' class='navbar-brand'> Criar Equipamentos</a>
                        </li>
                        <li class='nav-item'>
                        <a href='/' class='navbar-brand'> Entrar</a>
                        </li>
                        <li class='nav-item'>
                        <a href='/' class='navbar-brand'> Cadastrar</a>
                        </li>

                     </ul>

                </div>
            </nav>
        </header>
    @yield('content')
        <footer>
        <p>Sistema de Manutenção de Equipamentos &copy; 2022 </p>
        </footer>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
