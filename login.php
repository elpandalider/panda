<?php
  require('conexion.php');



  if(!empty($_POST))
  {
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $contrasena = mysqli_real_escape_string($conexion,$_POST['contrasena']);
    $error = '';

    $sha1_pass=sha1($contrasena);


    $sql = "SELECT `id`, `nombre` FROM `usuarios` WHERE `contrasena` = '$sha1_pass' AND `nombre` = '$nombre'";
    $result=$conexion->query($sql);

    $rows = $result -> num_rows;


    if($rows>0){
      session_start();
      $row = $result->fetch_assoc();
      $_SESSION['id'] = $row['id'];
      $_SESSION['nombre'] = $row['nombre'];
      header("location: index.php");
    } else {
      $error = "El nombre o password son incorrectos";

    }



  }

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <title> Formulario de Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content=" user-scalable=no, initial-scale=1.0, maximum-scale=1,
    minimum-scale=1.0">
    <link rel="stylesheet" href="css\estilos.css" type="text/css">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\bootstrap-material-design.css" media="screen" title="no title">
    <link rel="stylesheet" href="node_modules\bootstrap-material-design\dist\css\ripples.css" media="screen" title="no title">
  </head>
  <body>
    <div class="container">
      <img src="images/usuario.png">
    </span>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-input">
        <input type="text" id="nombre" name="nombre" placeholder="Usuario">
        </div>
        <div class="form-input">
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
        </div>
        <input class="btn-login" type="submit" name="submit" value="Ingresar" >
        <br><br><a href="#"> Olvidaste la contraseña? </a>
    </form>
    <div style="font-size=16px; color:#cc0000;"><?php echo isset($error)? utf8_decode($error) : '' ;?></div>
    </div>
  </body>
</html>
