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
    <link href="//fonts.googleapis.com/css?family=Roboto&subset=latin&effect=shadow-multiple" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oswald&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oxygen&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto:900&substet=latin" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>PANDA</title>
  </head>
  <body>


        <!-- Navegador -->
  <?php require 'nav.php'; ?>

	      <div class="container-fluid">
      <div class="row">
        <div class="text-center col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 titulo">
          <h2>FALTA DE ATENCIÓN</h2> <br>
          <DIV align=left><h4 class=" bienvenida-panel">
            Los síntomas de falta de atención son probablemente los más difíciles de percibir en edades infantiles. Sin embargo,
			es posible que sea uno de los principales motivos de consulta entre los adultos con TDAH. <br>
			</h4><br></div>
			<DIV align=left><h4>La persona que padece déficit de atención se caracteriza por que:</div></br></h4>
			<ul align=left>
			<li type="circle"><h4>Tiene dificultad para mantener la atención durante un tiempo prolongado</li></h4>
			<li type="circle"><h4>Presenta dificultades para finalizar tareas</li></h4>
			<li type="circle"><h4>Es desorganizado en sus tareas y actividades</li></h4>
			<li type="circle"><h4>Se distrae con facilidad</li></h4>
			<li type="circle"><h4>No concluye lo que empieza</li></h4>
			<li type="circle"><h4>Cambia frecuentemente de conversación</li></h4>
			<li type="circle"><h4>Presenta dificultades para seguir las normas o detalles de los juegos</li></h4>
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
                <div class="fill" style="background-image:url('images/s1.jpg');"></div>

                <div class="carousel-caption">
                  <h1 class="bienvenido"></h1>
                  <h3 >¿Notas algo diferente en tu hijo?</h3>
                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/fa2.jpg');"></div>
                <!--img src="images\slider.jpg" alt="">-->
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <div class="fill" style="background-image:url('images/s3.jpeg');"></div>
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
