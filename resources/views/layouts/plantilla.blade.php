<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav id="nav" class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Berlín">Berlín</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Múnich">Múnich</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Hamburgo">Hamburgo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Colonia">Colonia</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar-->

<div class="container">
    <div class="row">
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<footer class="footer">
    <h1>Derechos reservados</h1>
</footer>


</body>
</html>
