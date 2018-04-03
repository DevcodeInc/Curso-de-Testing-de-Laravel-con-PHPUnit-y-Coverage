<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="Saquib" content="Blade">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="row">

                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">Devcodela</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" id="categorias">Categoria<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @yield('categorias')
                                </ul>
                            </li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div>
                @yield('content')
            </div>
            <footer class="nav navbar-inverse">
                <ul class="navbar-brand">
                    <li>© Copyright 2018 Devcodela - Sebastian Artaza </li>
                </ul>
            </footer>

        </div>
    </body>
</html>
