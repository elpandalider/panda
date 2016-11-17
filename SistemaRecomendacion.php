<?php

//Funcion que calcula el promedio de califiaciones de un usuario
//ENTRADA: califiaciones-lista que contiene las califiaciones del usuario
//SALIDA: promedio-El promedio de sus califiaciones
function calcularPromedio($califiaciones){
  $promedio = 0;
  $suma =0;
  for ($x=0; $x<count($califiaciones); $x++){
    $suma = $suma + $califiaciones[$x];
  }
  $promedio = $suma/count($califiaciones);
  return $promedio;
}

//funcion que calcula la similtus de dos usuarios
//ENTRADA: calUsu1- lista de califiaciones del usuario 1
//         calUsu2- lista de califiaciones del usuario 2
//         promUsu1- promedio de califiaciones de usuario 1
//         promUsu2- promedio de califiaciones de usuario 2
//SALIDA: similitud- regrega el valor de la similitud entre los usuarios
function similitudUsuarios($calUsu1, $calUsu2, $promUsu1, $promUsu2){
  $suma =0;$raiz1 = 0; $raiz2 = 0; $similtud =0;
  for ($x=0; $x<count($calUsu1); $x++){
    $suma = $suma + (($calUsu1[$x] - $promUsu1)*($calUsu2[$x] - $promUsu2));
    $raiz1 = $raiz1 + pow(($calUsu1[$x] - $promUsu1),2);
    $raiz2 = $raiz2 + pow(($calUsu2[$x] - $promUsu2),2);
  }
  $similitud = $suma/(sqrt($raiz1)*sqrt($raiz2));
  return $similitud;
}

//funcion para predecir la califiacion a una actividad
// ENTRADA: promUsuDest - promedio de calificaciones del usuario a quien se va a recomendar
//          similitudU1 - similitud con el usuario a comparar 1
//          similitudU2 - similitud con el usuario a comparar 2
//          promUsu1 - promedio del usuario a comparar 1
//          promUsu2 - promedio del a comparar 2
//          a1Recom - valor del usuario a comparar 1 de la actividad de la que se calculara la prediccion
//          a2Recom - valor del usuario a comparar 2 de la actividad de la que se calculara la prediccion
//SALIDA: prediccion - valor de la califiacion que se predice
function calcularPrediccion($promUsuDest, $similitudU1, $similitudU2, $promUsu1, $promUsu2,$a1Recom,$a2Recom){
  $prediccion = $promUsuDest + ((($similitudU1*($a1Recom-$promUsu1)) + ($similitudU2*($a2Recom-$promUsu2)))/($similitudU1 + $similitudU2));
   return $prediccion;
}
 ?>
