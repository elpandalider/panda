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
          <h2>HIPERATIVIDAD</h2> <br>
          <DIV align=left><h4 class=" bienvenida-panel">
            La hiperactividad puede manifestarse de forma distinta en las diferentes etapas de la vida, aunque la descripción de los síntomas
			sí que permanece igual para niños y adultos.. <br>
			</h4><br></div>
			<DIV align=left><h4>La persona que padece hiperactividad se caracteriza por que:</div></br></h4>
			<ul align=left>
			<li type="circle"><h4>Le cuesta permanecer quieto cuando es necesario</li></h4>
			<li type="circle"><h4>Habla en exceso</li></h4>
			<li type="circle"><h4>Hace ruidos constantemente, incluso en actividades tranquilas</li></h4>
			<li type="circle"><h4>Tiene falta de constancia</li></h4>
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
                <div class="fill" style="background-image:url('images/h2.jpg');"></div>


              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/h1.jpg');"></div>
                <!--img src="images\slider.jpg" alt="">-->
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/h3.jpg');"></div>
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
