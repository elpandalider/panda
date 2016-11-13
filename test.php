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
    <link href=";">
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
        <div class="col-md-8 col-md-offset-2">
          <p id="TitPor">Completado: 0%</p>
          <div  class="progress progress-striped" style="height: 20px;">
            <div id ="progreso" class="progress-bar progress-bar-info" style="width:0%;"></div>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-8 col-md-offset-2 jumbotron">
            <div id="pregunta1">
              <p> 1. ¿Tiene tu hijo problemas para mantener su atención durante largo tiempo al llevar a cabo un juego o una tarea? </p>
              <p> <input type="radio" onclick="ocultar('pregunta1');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta1');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta1');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta2">
              <p>2.  ¿No obedece las indicaciones de otros o no termina tareas (en la escuela, en casa o en el equipo deportivo, por ejemplo)? </p>
              <p> <input type="radio" onclick="ocultar('pregunta2');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta2');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta2');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta3">
              <p>3. ¿Tiende a cometer descuidos al realizar los deberes u otras actividades y no se fija en los detalles? </p>
              <p> <input type="radio" onclick="ocultar('pregunta3');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta3');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta3');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta4">
              <p>4. ¿Pierde habitualmente objetos que necesita para acabar sus actividades o tareas (cuadernos, lápices, libros o juguetes, por ejemplo)?</p>
              <p> <input type="radio" onclick="ocultar('pregunta4');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta4');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta4');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta5">
              <p>5. ¿Suele distraerse con facilidad ante estímulos externos? </p>
              <p> <input type="radio" onclick="ocultar('pregunta5');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta5');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta5');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta6">
              <p>6. ¿Suele evitar las tareas que requieren una larga concentración (colaborar en clase o hacer deberes)? </p>
              <p> <input type="radio" onclick="ocultar('pregunta6');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta6');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta6');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta7">
              <p> 7. ¿Habitualmente parece ausente o que no escucha bien cuando se le habla?  </p>
              <p> <input type="radio" onclick="ocultar('pregunta7');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta7');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta7');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta8">
              <p>8. ¿Se muestra impaciente hasta que llega su turno y suele interrumpir con respuestas
                    y observaciones sin controlar los límites socialmente establecidos? </p>
              <p> <input type="radio" onclick="ocultar('pregunta8');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta8');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta8');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta9">
              <p>9.  ¿Le resulta difícil permanecer sentado en silencio o concentrarse en algo sin hablar? </p>
              <p> <input type="radio" onclick="ocultar('pregunta9');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta9');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta9');nunca();"/> Nunca </p>
            </div>
            <div id="pregunta10">
              <p>10. ¿Estas anomalías de concentración, atención y actitud nerviosa comenzaron antes de que cumpliera los 6 años? </p>
              <p> <input type="radio" onclick="ocultar('pregunta10');si();"/> Si, muy a menudo </p>
              <p> <input type="radio" onclick="ocultar('pregunta10');aveces();"/> A veces </p>
              <p> <input type="radio" onclick="ocultar('pregunta10');nunca();"/> Nunca </p>
            </div>
            <div id="resultado" class="alert alert-dismissible alert-success" role="alert" style="display:none;">
              <strong><h4>Terminado!</h4></strong>
              <p>

              </p>
            </div>
          </div>
        </div>


    <!--Scripts-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\material.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\ripples.js"></script>
    <script>
      var total=0;
      var c=0;
      function ocultar(elemento){
        document.getElementById(elemento).style.display = 'none';

      }
      function si(){
        total = total + 2;
        c=c+10;
        progress();
      }
      function aveces(){
        total = total + 1;
        c=c+10;
        progress();
      }
      function nunca(){
        total = total + 0;
        c=c+10;
        progress();
      }
      function progress(){
        document.getElementById("progreso").style.width = c + "%" ;
        document.getElementById("TitPor").innerHTML = "Completado: <strong>" + c + "%</strong>" ;
        if (c ==100){
          document.getElementById("resultado").style.display = 'block';
          if(total>10){
            document.getElementById("resultado").innerHTML = "<strong><h4>Terminado!</h4></strong><p>Es posible que el diagnostico sea positivo, le aconsejamos visitar a un especialista</p>" ;
          }else{
            document.getElementById("resultado").innerHTML = "<strong><h4>Terminado!</h4></strong><p>Probablemente el resultado es negativo, para un diagnostico mas atinado le aconsejamos visitar a un especialista</p>"
          }

        }
      }
    </script>
    <script type="text/javascript">
      $.material.init()
    </script>
  </body>
</html>
