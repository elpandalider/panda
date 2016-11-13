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
            <h2 align="center">Videos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8 juegos">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Juegos para niños</h3>
            </div>
            <div class="panel-body">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="images\Videos\video1.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <p>
                    Juego para niños, para ejercitar la atención, la memoria y y la lógica. En este video hay varias pruebas. Se da un tiempo aproximado para que el video no se haga muy pesado. Si fuese necesario se puede parar el video para dar mas tiempo a pensar.


                  </p>
                  <a href="video1.php" class="btn btn-raised btn-success">Ver Video</a>
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
              <h3 class="panel-title">Sílabas ma me mi mo mu - El Mono Sílabo</h3>
            </div>
            <div class="panel-body">
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="images\Videos\video2.jpg" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <p>
                      Video de silabas que ayuda a la lectura y la escritura en los niños
                  </p>
                  <a href="video2.php" class="btn btn-raised btn-success">Ver Video</a>
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
