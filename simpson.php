<?php session_start();
require('conexion.php');
$id_juego = 4;
if(!empty($_POST))
{
  $nuevaCal =  $_POST['calificacion'];

  $sql = "SELECT * FROM `calificacion` WHERE `id_usuario` = '$_SESSION[id]' AND`id_actividad` ='$id_juego'";
  $result=$conexion->query($sql);

  $rows = $result -> num_rows;


  if($rows>0){
    $sql_nueva = "UPDATE `calificacion` SET `calificacion`='$nuevaCal' WHERE `id_usuario` = '$_SESSION[id]' AND `id_actividad` ='$id_juego'";

  } else {
    $sql_nueva = "INSERT INTO `calificacion`(`id`, `id_usuario`, `id_actividad`, `calificacion`) VALUES (NULL,'$_SESSION[id]','$id_juego','$nuevaCal')";
  }
  $result=$conexion->query($sql_nueva);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Stylesheets-->
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\bootstrap-material-design.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\ripples.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\stylesheets2.css" media="screen" title="no title">
    <link rel="stylesheet" href="css\ranking.css" media="screen" title="no title">
    <link href="//fonts.googleapis.com/css?family=Amiko&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto&subset=latin&effect=shadow-multiple" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Quicksand&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oswald&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Oxygen&subset=latin" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Roboto:900&substet=latin" rel="stylesheet" type="text/css">
    <link href=";">
    <meta charset="utf-8">
    <title>PANDA</title>
  </head>
  <body>

        <!-- Navegador -->
  <?php


  require 'nav.php';
  if (isset ($_SESSION['id'])){

    $cal = 0;
    $sql = "SELECT * FROM `calificacion` WHERE `id_usuario` = '$_SESSION[id]' AND `id_actividad` = '$id_juego'";
    $res = $conexion->query($sql);
    while($rows = $res->fetch_assoc()){
        $cal = $rows['calificacion'];
      }
    }
  ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="panel panel-primary panel-juego">
            <div class="panel-heading titulo-juego">
              <h1 class="panel-title text-center ">Memorama Bob Esponja</h1>
            </div>
            <div class="panel-body">
              <div class="media">

                <div class="media-body">
                  <iframe src='http://www.minijuegostop.com.mx/showFlash.php?id=14433' width='100%' height='500px' frameborder=0></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if (isset ($_SESSION['id'])){ ?>
      <div class="row">
        <div class=" col panel panel-default col-md-offset-3 col-md-6">
          <div class="panel-body">
            <h4 id ="mensaje" class="text-center"><?php echo "Calificacion: " . $cal ?> <small>/5</small></h4>
            <div id ="cal" class="ec-stars-wrapper col-md-offset-4 col-md-4">
              <?php $id = 1;
              for($x=1; $x<=($cal); $x++){
    	        echo "<a href='#cal' id='" . $id . "' onclik='calificar()' class='select' data-value=" . $x ." title='Votar con " . $x ." estrellas'>&#9733;</a>";
              $id = $id +1; }
              for($x=1; $x<=(5-$cal); $x++){
    	        echo "<a href='#cal' id='" . $id . "' class='noSelect' data-value=" . $x ." title='Votar con " . $x ." estrellas'>&#9733;</a>";
              $id = $id +1;}
              ?>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="col-md-offset-4 col-md-4">
              <input id ="textCal" type="text" name="calificacion" style="visibility:hidden" >
              <input class="btn btn-raised btn-info " type="submit" name="submit" value="Guardar calificacion" >
            </form>
          </div>
        </div>

      </div>

      <?php  } ?>
    </div>


    <!--Scripts-->
    <script type="text/javascript" src="node_modules\jquery\jquery-1.9.1.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\material.js"></script>
    <script type="text/javascript" src="node_modules\bootstrap-material-design\dist\js\ripples.js"></script>
    <script type="text/javascript">
    var actual = <?php echo $cal; ?>;
    $("a").click(function() {
                var oID = $(this).attr("id");
                if (actual == 0) {
                  actual =1;
                }

                if(actual < oID){
                  for (var i = actual; i <= oID; i++){
                    document.getElementById(i).className = "select";
                  }

                }else{
                  for (var i = oID; i <= actual; i++){
                    document.getElementById(i).className = "noSelect";
                  }
                }
                document.getElementById("mensaje").innerHTML = "Calificacion: " + oID + " <small>/5</small>";
                document.getElementById("textCal").value = oID;
                actual = oID;
                });

    </script>
    <script type="text/javascript">
      $.material.init()
    </script>
  </body>
</html>
