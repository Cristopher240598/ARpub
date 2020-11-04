<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>ARpub</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container">
                <a class="navbar-brand logo" href="#">ARpub</a>
            </div>
        </nav>
        @yield('content')
        <footer class="page-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col" style="margin-left: auto;">
                        <span class="d-xl-flex justify-content-xl-start align-items-xl-center" style="color: rgb(210,209,209);margin-top: 30px;">
                            <img style="height: 12px;padding-right: 5px;" src="assets/img/Inicio/Bandera_Mexico.png">México
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2020 ARpub</p>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="assets/js/script.min.js"></script>
    </body>
</html>