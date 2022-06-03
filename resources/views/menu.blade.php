<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.cs')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
<link rel="stylesheet" href="assets/css/owl.css">
<link rel="stylesheet" href="assets/css/lightbox.css">
    <title>Elecciones</title>
</head>
<body style="background:#C7C7CF" >
    <header style="background:#1CD8C4">
        <div role="navigation">
            <nav class="navbar navbar-nav navbar-expand-lg navbar-light" style="background-color: #3339FF;">
            <div class="video-overlay header-text">
          <div class="caption">
              <h6>ELECCIONES 2022</h6>

              
          </div>
      </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidato
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="candidato/create">Crear</a>
                                <a class="dropdown-item" href="/candidato">Consultar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Casilla
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="casilla/create">Crear</a>
                                <a class="dropdown-item" href="/casilla">Lista</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Elecciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="eleccion/create">Crear</a>
                                <a class="dropdown-item" href="/eleccion">Lista</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Voto
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="voto/create">Crear</a>
                                <a class="dropdown-item" href="/voto">Lista</a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                              Reportes
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="http://localhost:8888/casilla/pdf">PDF</a>
                                <a class="dropdown-item" href="http://localhost:8888/preview">Gráfica</a>
                            </div>
                            </li>
                        </li>
                        <li><a href="http://localhost:8888/logout" class="dropdown-item">Cerrar Sesion</a></li>
                       
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="https://www.voaxaca.tecnm.mx/wp-content/uploads/2020/05/itvo.ico" width="100px" style="margin: 7%;">
            </div>
            <div class="col-md-8 text-center">
                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la Reina ITVO</h5>
            </div>
            <div class="col-md-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/TecNM_logo.png" width="150px" style="margin: 7%;">
            </div>

        </div>
    </header>
    <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
             
              <h2><em>BIENVENIDO</em> </h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="http://localhost:8888/login">Iniciar sesion</a></div>
              </div>
          </div>
      </div>
  </section>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('app.js')}}" type="text/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/844dec5863.js" crossorigin="anonymous"></script>
</body>
</html>