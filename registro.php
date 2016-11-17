<!DOCTYPE html>
<?php
  session_start();
  require('conexion.php');
  $ready = 1;
if(!empty($_POST)){
  $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
  $contrasena = sha1(mysqli_real_escape_string($conexion,$_POST['contrasena']));
  $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
  $contrasena2 = sha1(mysqli_real_escape_string($conexion,$_POST['contrasena2']));

  $sql = "SELECT contrasena,correo FROM usuarios";
  $res = $conexion->query($sql);
  while($rows = $res->fetch_assoc()){
    if($correo == $rows['correo']){
      $error = "El correo ya existe";
      $ready = 0;
    }
  }
  if($nombre == "" or $correo == "" or $contrasena == "" or $contrasena2 == ""){
    $error ='Debes completar todos los campos';
    $ready = 0;
}

  if(strlen($nombre) > 15){
    $error ='El nombre debe tener menos de 15 caracteres';
    $ready = 0;
}
if($ready == 1){
  $sql = "INSERT INTO usuarios(id,nombre,correo, contrasena) VALUES (NULL,'$nombre','$correo','$contrasena')";
  if($contrasena == $contrasena2){
    $res = $conexion->query($sql);
    $sqlCons = "SELECT `id`, `nombre` FROM `usuarios` WHERE `contrasena` = '$contrasena' AND `nombre` = '$nombre' AND `correo` = '$correo'";
    $datos=$conexion->query($sqlCons);
    $row1 = $datos->fetch_assoc();
    $_SESSION['id'] = $row1['id'];
    $_SESSION['nombre'] = $row1['nombre'];


    header("location: index.php");
  }else{
    $error = "Las contraseñas no coinciden";

  }

}
    //validaciones
  }

 ?>

<html lang="es">
  <head>
    <title> Resgistro </title>
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


    <form id="registro" name="registro" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >



			<div class="form-input"><input id="correo"name="correo" type="text" placeholder="Correo" ></div>

			<div class="form-input"><input id="nombre" name="nombre" type="text" placeholder="Nombre de usuario"></div>

			<div class="form-input"><input id="contrasena" name="contrasena" type="password" placeholder="Passsword"></div>

			<div class="form-input"><input id="contrasena2" name="contrasena2" type="password" placeholder="Confirmar Passsword"></div>
      <br>
      <input class="btn-login" type="submit" name="submit" value="Registrarse" >
      <br>
			<a href="login.php">Regresar</a>
		</form>



			<br />
			<div style="font-size=16px; color:#cc0000;"><?php echo isset($error)? utf8_decode($error) : '' ;?></div>


    </div>



  </body>
</html>
