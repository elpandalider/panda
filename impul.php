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
        <div class="text-center col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 titulo">
          <h2>IMPULSIVIDAD</h2> <br>
          <DIV align=left><h4 class=" bienvenida-panel">
            La impulsividad es probablemente el síntoma menos frecuente de los tres síntomas nucleares del TDAH. <br>
			</h4><br></div>
			<DIV align=left><h4>La persona que padece impulsividad se caracteriza por que:</div></br></h4>
			<ul align=left>
			<li type="circle"><h4>Es impaciente</li></h4>
			<li type="circle"><h4>Tiene problemas para esperar su turno</li></h4>
			<li type="circle"><h4>Interrumpe constantemente a los demás</li></h4>
			<li type="circle"><h4>Tiene respuestas prepotentes: espontáneas y dominantes</li></h4>
			<li type="circle"><h4>Tiende a “toquetearlo” todo</li></h4>
			<li type="circle"><h4>Suele tener conflictos con los adultos</li></h4>
			</ul>
        </div>
      </div>


    </div>
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
                <div class="fill" style="background-image:url('images/ii.jpg');"></div>

              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/i2.jpg');"></div>
                <!--img src="images\slider.jpg" alt="">-->
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/i3.jpg');"></div>
                <!--img src="images\slider.jpg" alt="">-->
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
