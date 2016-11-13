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
  <?php require 'nav.php'; ?>
  <div class="container-fluid">
      <div class="row">
        <div class="text-center col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 titulo">
          <h2>SINTOMAS PRINCIPALES</h2>
          <p class=" bienvenida-panel">
           <dl> <dt><h3>El Trastorno por Déficit de Atención(TDA) tiene 3 síntomas nucleares (principales):</dt></h3>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img style="margin-left: 50px;" class="destacado limpio" src="images\sd1.jpg" alt="" />
            <div class="caption">
              <h3>Falta de atención</h3>
              <p>
                El déficit de atención suele aparecer generalmente cuando se inicia la etapa escolar, debido a que se requiere una actividad cognitiva más compleja.
				Por lo general, persiste de forma significativa durante la adolescencia y la edad adulta.
              </p>
              <p><a href="fa.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img class="destacado limpio" src="images\sd2.jpg" alt="" />
            <div class="caption">
              <h3>Hiperactividad</h3>
              <p>
                Es probablemente uno de los síntomas más fáciles de reconocer, por su evidencia y por ser el más conocido por el público en general.
				Puede manifestarse de forma distinta, aunque la descripción de los síntomas sí que permanece igual para niños y adultos.
              </p>
              <p><a href="hiper.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img class="destacado limpio" src="images\sd3.jpg" alt="" />
            <div class="caption">
              <h3>Impulsividad</h3>
              <p>
                La impulsividad se refiere fundamentalmente a la dificultad para pensar las cosas antes de actuar.
				Esto supone un gran problema, ya que el paciente puede ponerse en peligro y vivir situaciones conflictivas principalmente en la edad adulta.
              </p>
              <p><a href="impul.php" class="btn btn-raised btn-primary btn-lg">Leer mas</a></p>
            </div>
          </div>
        </div>
      </div>

        <!-- Navegador -->

    <!--Scripts-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\material.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\ripples.js"></script>
    <script type="text/javascript">
      $.material.init()
    </script>
  </body>
</html>
