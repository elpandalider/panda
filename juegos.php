<!DOCTYPE html>
<html>
  <head>
    <!--Stylesheets-->
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 titulo">
          <div class="page-header">
            <h2 align="center">Juegos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 juegos">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Memorama Bob Esponja</h3>
            </div>
            <div class="panel-body">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="images\Juegos\Rompecabezas-Bob.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <p>
                    Los puzzles pueden ser una gran ayuda para mejorar la concentración.
                    Existen muchas variantes de puzzles que pueden alternarse en función de los gustos del niño o del momento
                  </p>
                  <a href="Rompecabezas-bob.php" class="btn btn-raised btn-success">PLAY</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 juegos">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Simon</h3>
            </div>
            <div class="panel-body">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="images\Juegos\simon.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <p>
                    Los juegos que ayudan a memorizar como los juegos de “encuentra la pareja” o “Simon dice”
                     pueden ser positivos para los niños con TDAH ayudándoles a memorizar cosas y a fijar su atención.
                  </p>
                  <a href="simon.php" class="btn btn-raised btn-success">PLAY</a>
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
