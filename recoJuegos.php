<?php
//METODO DE LOS VECINOS CERCANOS
$recomedado=0;
$usuario = $_SESSION['id'];
$cont = 0;
//Consulta para obtener las atividades calificadas del usuario en sesion
$sql = "SELECT `id_actividad`, `calificacion` FROM `calificacion` WHERE `id_usuario` = '$usuario' ORDER BY `id_actividad`";
$result = $conexion->query($sql);
$conteo = $result -> num_rows;
if($conteo>1){
//Se construye la consulta para obtener a usuarios que tengan las mismas actividades calificadas
$sql_agrupar="SELECT `id_usuario`, `id_actividad`, `calificacion` FROM `calificacion` WHERE (";
while ($rows = $result->fetch_assoc()) {
  //se guarda en una array los id de las actividades ya calificadas
  $Acts[] = $rows['id_actividad'];
  $sql_agrupar= $sql_agrupar . " `id_actividad` = " . $rows['id_actividad'] . " OR";
  //se guarda en una array las calificaciones de las actividades
  $usuPrin[] = $rows['calificacion'];
}
$sql_agrupar = substr($sql_agrupar, 0, -2);
$sql_agrupar= $sql_agrupar . ") AND `id_usuario` != '$usuario' ORDER BY `id_usuario`,`id_actividad`";


//Se obtienen los usuarios que exactamente cuenten con las actividades calificadas que el usuario a recomendar
$cont = 0;
$ant = 0;
$result = $conexion->query($sql_agrupar);
//$conteo = $result -> num_rows;
if($result){
while ($rows = $result->fetch_assoc()) {
  if($cont ==0||$ant == $rows['id_usuario']){//<- se valida si se es el mismo usuario que el ciclo pasado
    $cont = $cont + 1;
    $CalActual[] = $rows['calificacion'];    //<- si lo es se guarda su califiacion e id en dos arrays temporales
    $ant= $rows['id_usuario'];
  }elseif($cont == count($usuPrin)){         //<- si ya no se verifica si el numero de actividades corresponde al
    $usuarios[] = $ant;
    $CalUsuarios[] = array_values($CalActual);
    $CalActual = array();                     //<- se almacena su su califiacion e id en dos arrays y se reinicinan las temporales
    $CalActual[] = $rows['calificacion'];
    $cont = 1;
    $ant= $rows['id_usuario'];
  }else{
    $CalActual = array();
    $cont = 1;
    $CalActual = array();
    $CalActual[] = $rows['calificacion'];
    $ant= $rows['id_usuario'];
  }
}
$PromUsuPrin = calcularPromedio($usuPrin); //<- promedio del usuario a recomendar


// Con este  ciclo se obtien el promedio y similitud de cada usuario que cuente con el mismo num de acts
for ($x=0; $x<count($usuarios); $x++){
  $PromUsuarios[] = calcularPromedio($CalUsuarios[$x]);

  $simUsuarios[] = similitudUsuarios($usuPrin,$CalUsuarios[$x],$PromUsuPrin,$PromUsuarios[$x]);
}

// Con esta funcion se obtienen los dos mas parecidos a el usuario a recomendar
$nrows = $result -> num_rows;
$cont = 0;
$selecc1 = 0;
$selecc2 = 0;

if(count($usuarios)>0){

  for ($x=0; $x<count($usuarios); $x++){
    $cont = 0;
    if($simUsuarios[$x]>=$simUsuarios[$selecc1]){
      $selecc1 = $x;
    }elseif ($simUsuarios[$x]>=$simUsuarios[$selecc2] && count($usuarios)>1 && $cont > 0) {
      $selecc2 = $x;
    }
  }




//Con estas funciones se obtienen las actividades que no ha realizado el usuario a recomendar
$sql = "SELECT * FROM `calificacion` WHERE `id_usuario` = '$usuarios[$selecc1]' ORDER BY `id_actividad`";

$result = $conexion->query($sql);
while ($rows = $result->fetch_assoc()) {
  if (!(in_array($rows['id_actividad'], $Acts))) {
      $ActsReco1[]= $rows['id_actividad'];
      $ActsCalRe1[] = $rows['calificacion'];
  }
}

if($selecc2<>-1){
$sql = "SELECT * FROM `calificacion` WHERE `id_usuario` = '$usuarios[$selecc2]' ORDER BY `id_actividad`";

$result = $conexion->query($sql);
while ($rows = $result->fetch_assoc()) {
  if (!(in_array($rows['id_actividad'], $Acts))  &&  (in_array($rows['id_actividad'], $ActsReco1))) {
      $ActsReco2[]= $rows['id_actividad'];
      $ActsCalRe2[] = $rows['calificacion'];
  }
}


for ($x=0; $x<count($ActsReco1); $x++){

  $pred[] = calcularPrediccion($PromUsuPrin, $simUsuarios[$selecc1], $simUsuarios[$selecc2], $PromUsuarios[$selecc1],$PromUsuarios[$selecc2],$ActsCalRe1[$x],$ActsCalRe2[$x]);
  if ($recomedado <= $pred[$x]){
    $recomedado = $ActsReco2[$x];
  }
}
}
}
}
}
?>
