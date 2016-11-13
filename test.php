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
    <title>Test</title>
  </head>
  <body>


        <!-- Navegador -->
  <?php require 'nav.php'; ?>
<!-- Aquí acaba navegadoe -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 titulo">
          <div class="page-header">
            <h2 align="center">Test TDAH</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-10 col-md-offset-1 jumbotron">
            <p> 1. ¿Tiene tu hijo problemas para mantener su atención durante largo tiempo al llevar a cabo un juego o una tarea? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>2.  ¿No obedece las indicaciones de otros o no termina tareas (en la escuela, en casa o en el equipo deportivo, por ejemplo)? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>3. ¿Tiende a cometer descuidos al realizar los deberes u otras actividades y no se fija en los detalles? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>4. ¿Pierde habitualmente objetos que necesita para acabar sus actividades o tareas (cuadernos, lápices, libros o juguetes, por ejemplo)?</p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>5. ¿Suele distraerse con facilidad ante estímulos externos? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>6. ¿Suele evitar las tareas que requieren una larga concentración (colaborar en clase o hacer deberes)? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p> 7. ¿Habitualmente parece ausente o que no escucha bien cuando se le habla?  </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>8. ¿Se muestra impaciente hasta que llega su turno y suele interrumpir con respuestas
                  y observaciones sin controlar los límites socialmente establecidos? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>9.  ¿Le resulta difícil permanecer sentado en silencio o concentrarse en algo sin hablar? </p>
            <p> <input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
            <p> <input type="radio" /> Nunca </p>

            <p>10. ¿Estas anomalías de concentración, atención y actitud nerviosa comenzaron antes de que cumpliera los 6 años? </p>
            <p><input type="radio" /> Si, muy a menudo </p>
            <p> <input type="radio" /> A veces </p>
          </div>
        </div>



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
