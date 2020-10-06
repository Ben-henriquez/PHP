<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@fotografodeaventuras</title>
    <link href="<?php echo get_template_directory_uri() ?>/library/fontawesome/css/all.css" type="text/css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/library/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/library/fancybox/dist/jquery.fancybox.min.css" type="text/css" rel="stylesheet">
    <?php wp_head()//carca el css de los plugins ?>
    <link href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/https://use.typekit.net/gdz8bnd.css">
</head>
<body>
    <!--NAVBAR-->
    <header class="cabecera">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php"><?php the_custom_logo() ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="menuprincipal">
              <ul class="navbar-nav mr-auto">
                <h6><?php
                  wp_nav_menu(array('theme_location'=>'superior'))
                ?></h6>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
    </header>

