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
                <a class="navbar-brand logo" href="#">Arpub</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link d-lg-flex justify-content-lg-center align-items-lg-center" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 12px;">
                                <i class="fa fa-user-circle-o" style="font-size: 30px;padding-right: 10px;"></i>Usuario
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('crear-disenio') }}">Crear diseño</a>
                                <a class="dropdown-item" href="{{ route('index-usuario') }}">Mis diseños</a>
                                <a class="dropdown-item" href="{{ route('modificar-perfil') }}">Modificar perfil</a>
                                <a class="dropdown-item" href="#">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
</html>