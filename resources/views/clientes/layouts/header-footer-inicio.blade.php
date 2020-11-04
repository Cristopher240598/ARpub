<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>ARpub</title>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container">
                <a class="navbar-brand logo" href="#">ARpub</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inicio') }}">inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicios') }}">servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios') }}">usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes') }}">clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">iniciar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="page-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>General</h5>
                        <ul>
                            <li>
                                <a href="{{ route('inicio') }}">Inicio</a>
                            </li>
                            <li>
                                <a href="{{ route('servicios') }}">Servicios</a>
                            </li>
                            <li>
                                <a href="{{ route('usuarios') }}">Usuarios</a>
                            </li>
                            <li>
                                <a href="{{ route('clientes') }}">Clientes</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3" style="margin-left: auto;">
                        <span class="d-xl-flex justify-content-xl-start align-items-xl-center" style="color: rgb(210,209,209);margin-top: 30px;">
                            <img style="height: 12px;padding-right: 5px;" src="{{ asset('assets/img/Inicio/Bandera_Mexico.png') }}">México
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2020 ARpub</p>
            </div>
        </footer>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="{{ asset('assets/js/script.min.js') }}"></script>
    </body>
</html>