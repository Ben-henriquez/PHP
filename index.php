<h1>Este es el index.php NO TOCAR</h1>



<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@fotografodeaventuras</title>
    <link href="<?php //echo get_template_directory_uri() ?>/library/fontawesome/css/all.css" type="text/css" rel="stylesheet">
    <link href="<?php //echo get_template_directory_uri() ?>/library/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php //echo get_template_directory_uri() ?>/library/fancybox/dist/jquery.fancybox.min.css" type="text/css" rel="stylesheet">
    <link href="<?php //echo get_template_directory_uri() ?>/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php //echo get_template_directory_uri() ?>/https://use.typekit.net/gdz8bnd.css">
</head>
<body>
    <!--NAVBAR--
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img class="imagen-logo" src="img/Logo-Monocromático.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Historia</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Chile
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Región de la Araucanía</a>
                    <a class="dropdown-item" href="#">Región de Aysén</a>
                    <a class="dropdown-item" href="#">Región de Magallanes</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Europa
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Madrid</a>
                    <a class="dropdown-item" href="#">Barcelona</a>
                    <a class="dropdown-item" href="#">Suecia</a>
                    <a class="dropdown-item" href="#">Findlandia</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          U.S.A
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Washington D.C</a>
                      <a class="dropdown-item" href="#">New York</a>
                    </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
    </header>

    <!--CARRUCEL--
    <main>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Top 6 de las mejores fotos</h1>
                  <p>Fotos tomadas por @fotografodeaventuras</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide (1).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>1° Carretera Austral</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide (2).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>2° Ciudad de Växjö, Suecia</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide (3).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>3° Parque del retiro de Madrid</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slider (4).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>4° Aurora Boreal en Saariselkä, Finlandia</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide (5).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>5° Puente de Manhattan, New York</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide (6).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>6° Mirador del Park Güel de Barcelona</h1>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </main>

    <!--Albumes--
    <section class="container-fluid albumes">
        <header class="rox text-center color albumes"> 
            <div class="col-12 mt-3 mt-md-4 mt-lg-4">
                <h1>Mis Experiencias</h1>
                <P>Recorrer el mundo y mostrar la belleza de éste para los demás <b>es la misión.</b> </P>
            </div>
        </header>
        <!-- Cards --
        <div class="container">
            <article class="row mr-4 ml-4 mr-md-4 ml-md-4 m-lg-auto">
                <div class="col-12 col-md-6 col-lg-3 pt-2 mb-4 d-block d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Región de Aysén</b></h5>
                          <p class="card-text">Región ubicada en la zona austral de Chile.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 mb-4 d-nlock d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body  text-center">
                          <h5 class="card-title"><b>Región de Magallanes y la Antártica chilena</b></h5>
                          <p class="card-text">Región austral de Chile.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 margin-b d-none d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Región de la Araucanía</b></h5>
                          <p class="card-text">Región de zona sur de Chile.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 margin-b d-none d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Washington D.C y NY</b></h5>
                          <p class="card-text">Capital de U.S.A y la Gran Manzana.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="row mr-4 ml-4 mr-md-4 ml-md-4 m-lg-auto">
                <div class="col-12 col-md-6 col-lg-3 pt-2 mb-4 d-block d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Madrid</b></h5>
                          <p class="card-text">Capital de España.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 mb-4 d-nlock d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body  text-center">
                          <h5 class="card-title"><b>Barcelona</b></h5>
                          <p class="card-text">Capital de Cataluña.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 margin-b d-none d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Finlandia</b></h5>
                          <p class="card-text">País Nórdico de Europa.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-2 margin-b d-none d-md-block d-lg-block">
                    <div class="card" style="width: 16rem;">
                        <img src="img/portada/8.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                          <h5 class="card-title"><b>Suecia</b></h5>
                          <p class="card-text">País Nórdico de Europa.</p>
                          <a href="#" class="btn btn-primary btn-busqueda">Ver Más</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!--Historia--
    <div class="jumbotron fondo-jumbotron historia">
        <h1 class="display-4 "><b>Mi Historia!</b></h1>
        <p class="lead "><b>Todo partio como un hobbie, algo en que pasar el rato pero luego se transformo más en una manera de disfrutar la vida.</b></p>
        <hr class="my-4">
        <p class=""><b>Mi iniciativa empezó en mi primer viaje a Europa donde....</b></p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Lee Más</a>
    </div>

    <!--CONTACTO--
    <section class="container">
      <div class="row">
        <article class="col-lg-12">
          
        </article>
      </div>
    </section>

    <!--Footer--
    <footer class="text-center fondo">
        <a href="javascript:;" class="btn_subir"><i class="fas fa-arrow-up icono"></i></a> 
        <br>
        <a class="navbar-brand mt-4 mb-4" href="#"><img class="imagen-logo" src="img/Logo-Monocromático.png"></a>
    </footer>


    <script src="<?php //echo get_template_directory_uri() ?>/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/js/popper.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/library/fancybox/dist/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/library/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/library/jquery-validation/jquery-validation-1.19.2/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/library/jquery-validation/jquery-validation-1.19.2/dist/localization/messages_es.min.js" type="text/javascript"></script>
    <script src="<?php //echo get_template_directory_uri() ?>/js/subir.js" type="text/javascript"></script>

</body>
</html-->