<!DOCTYPE html>
<html>
  <head>
    <!--Stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Amiko&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\bootstrap-material-design.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\ripples.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets2.css" media="screen" title="no title">
    <link href="//fonts.googleapis.com/css?family=Amiko&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>PANDA</title>
  </head>
  <body>


        <!-- Navegador -->

    <?php require 'nav.php'; ?>


    <header id="carousel-inicio" class="carousel slide" data-ride="carousel">
            <!-- Indicadores -->
          <ol class="carousel-indicators">
              <li data-target="#carousel-inicio" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-inicio" data-slide-to="1"></li>
              <li data-target="#carousel-inicio" data-slide-to="2"></li>
          </ol>

            <!-- slides -->
          <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="fill" style="background-image:url('images/slider.jpg');"></div>

                <div class="carousel-caption">
                  <h1 class="bienvenido">Bienvenido</h1>
                  <h3 >¿Buscas Ayuda?</h3>
                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/slider2.jpg');"></div>
                <div class="carousel-caption">
                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/slider3.jpg');"></div>
                <div class="carousel-caption">
                </div>
              </div>
            </div>
            <!-- Controles -->
          <a class="left carousel-control" href="#carousel-inicio" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-inicio" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </header>

    <div class="container-fluid">
      <div class="row">
        <div class="text-center col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 titulo-obj">
          <h2>OBJETIVO</h2>
          <p>
            Esta página web estará centrada en la ayuda a los niños y familiares que enfrenten el
            problema del déficit de atención, brindándoles información sobre este tema además de actividades
            que ayudaran a los niños a progresar junto a su tratamiento en su educación
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img class="destacado limpio" src="images\des1.jpg" alt="" />
            <div class="caption">
              <h3>Destacado 1</h3>
              <p>
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
              </p>
              <p><a href="#" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img class="destacado limpio" src="images\des2.jpg" alt="" />
            <div class="caption">
              <h3>Destacado 2</h3>
              <p>
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
              </p>
              <p><a href="#" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img class="destacado limpio" src="images\des3.jpg" alt="" />
            <div class="caption">
              <h3>Destacado 3</h3>
              <p>
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
              </p>
              <p><a href="#" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="panel panel-default information">
          <div class="panel-body">
            <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
              <div class="media titulo">
                <div class="media-left">
                  <img class="media-object panel-information limpio" src="images\mapa.png">
                </div>
                <div class="media-body">
                  <h2 class="media-heading">En Mexico</h2>
                  <p>
                    En la década de los 50, uno de cada 10 mil niños presentaba este síndrome,
                    y hoy lo padece el 12 por ciento del total de la población
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-md-4 col-md-offset-2">
              <div class="media titulo">
                <div class="media-left">
                  <img class="media-object panel-information limpio" src="images\estetoescopio.png">
                </div>
                <div class="media-body">
                  <h2 class="media-heading">70%</h2>
                  <p>
                    de las personas que sufren TDAH y reciben cuidados adecuados y
                    oportunos pueden interactuar de manera normal, con pocas posibilidades de crear conflictos
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Scripts-->
    <script type="text/javascript" src="node_modules\jquery\jquery-1.9.1.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\material.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\ripples.js"></script>
    <script type="text/javascript">
      $.material.init()
    </script>
  </body>
</html>
