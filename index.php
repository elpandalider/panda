<!DOCTYPE html>
<html>
  <head>
    <!--Stylesheets-->
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Amiko&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\bootstrap-material-design.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\ripples.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets2.css" media="screen" title="no title">
    <link href="//fonts.googleapis.com/css?family=Amiko&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto&subset=latin&effect=shadow-multiple" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oswald&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oxygen&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto:900&substet=latin" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <link href=";">
    <title>PANDA</title>
  </head>
  <body>


    <!-- Navegador -->

<?php
session_start();
require('nav.php');
?>


<header id="carousel-inicio" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-inicio" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-inicio" data-slide-to="1"></li>
          <li data-target="#carousel-inicio" data-slide-to="2"></li>
      </ol>
      <div class="arriba">
        <a class="btn btn-info btn-fab " href="#objetivo" ><span class="glyphicon glyphicon-chevron-down fab-icon" aria-hidden="true"></span></a>
      </div>
        <!-- slides -->
      <div class="carousel-inner " role="listbox">
          <div class="item active animatedParent" data-sequence='200'>
            <div class="fill" style="background-image:url('images/slider.jpg');"></div>
            <div class="carousel-caption " >
              <h1 class="bienvenido animated bounceIn slower"  data-id="1" >Bienvenido <?php if (isset ($_SESSION['id'])){ echo $_SESSION['nombre'];} ?></h1>
              <h3 class="blanco animated bounceIn slower" data-id="2">¿Buscas Ayuda?</h3>
            </div>
          </div>
          <div class="item ">
            <div class="fill" style="background-image:url('images/slider5.jpg');"></div>
            <div class="carousel-caption">
              <h1 class="bienvenido " > Actividades</h1>
              <h3 class="blanco ">Juegos, dinamicas y vídeos</h3>
            </div>
          </div>

          <div class="item ">
            <div class="fill" style="background-image:url('images/slider7.jpg');"></div>
            <div class="carousel-caption">
              <h1 class="bienvenido"> Consejos para padres</h1>
              <h3 class="blanco">Acercate a tus hijos</h3>
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

<div class="container-fluid "  >
  <div id="objetivo" class="row animatedParent objetivo">
    <div class="text-center col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 titulo-obj animated bounceInUp"  data-id="1">
      <h2 class="sub"> O B J E T I V O </h2>
      <p>
        Esta página web estará centrada en la ayuda a los niños y familiares que enfrenten el
        problema del déficit de atención, brindándoles información sobre este tema además de actividades
        que ayudaran a los niños a progresar junto a su tratamiento en su educación
      </p>
    </div>
  </div>
  <div class="row animatedParent " >
    <div class="col-xs-12 col-md-4 animated fadeInDownShort slowest">
      <div class="thumbnail ">
        <img class="destacado limpio" src="images\des1.jpg" alt="Que es TDAH" />
        <div class="caption">
          <h3 class="verde">¿Qué es TDAH?</h3>
          <h5>TODO SOBRE EL TRASTORNO</h5>
          <p>
            Se trata de un trastorno de carácter neurobiológico originado en
            la infancia que implica un patrón de déficit de atención, hiperactividad y/o impulsividad,
             y que en muchas ocasiones está asociado con otros trastornos comórbidos...
          </p>
          <p><a href="tdah.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 animated fadeInDownShort slowest">
      <div class="thumbnail ">
        <img class="destacado limpio" src="images\des2.jpg" alt="Sintomas" />
        <div class="caption">
          <h3 class="verde">Sintomas</h3>
          <h5> COMO SE MANIFIESTA </h5>
          <p>
            Los síntomas pueden manifestarse con una intensidad variable en
            cada paciente y pueden presentarse de forma independiente.
             Por lo tanto, el perfil sintomatológico de los afectados variará en intensidad y en presentación...
          </p>
          <p><a href="sintomas.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 animated  fadeInDownShort slowest">
      <div class="thumbnail">
        <img class="destacado limpio" src="images\des3.jpg" alt="" />
        <div class="caption">
          <h3 class="verde">Juegos</h3>
          <h5> ESPECIALES PARA SU HIJO </h5>
          <p>
          Los juegos qué forman parte de la sección actividades estan pensados para las
          actividades extracurriculares de su hijo. El propósito de los juegos es
          la convivencia familiar y el aprendizaje de los niños de manera que obtenga su atención...
          </p>
          <p><a href="juegos.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row animatedParent">
    <div class="panel panel-default information animated fadeInUpShort">
      <div class="panel-body">
        <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
          <div class="media titulo">
            <div class="media-left">
              <img class="media-object panel-information limpio" src="images\mapa.png">
            </div>
            <div class="media-body">
              <h2 class="media-heading">En México</h2>
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
<script type="text/javascript">

</script>
<script type="text/javascript" src="node_modules\jquery\jquery-1.9.1.js"></script>
<script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
<script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\material.js"></script>
<script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\ripples.js"></script>
<script src='js/css3-animate-it.js'></script>
<script type="text/javascript" src="js\scroll.js"></script>
<script type="text/javascript">
  $.material.init()
</script>
</body>
</html>
