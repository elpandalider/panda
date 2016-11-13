<?php

define('DB_SERVER','localhost');
define('DB_NAME','panda');
define('DB_USER','root');
define('DB_PASS','');
$conexion = new mysqli(DB_SERVER, DB_USER,DB_PASS, DB_NAME);
/*
if ($conexion->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
else
echo "Conexión exitosa!";
$query = "SELECT * FROM usuarios";
$resultado=$conexion->query($query);
print("<table>");
while ($rows = $resultado->fetch_assoc()) {
print("<tr>");
print("<td>".$rows["id"]."</td>");
print("<td>".$rows["nombre"]."</td>");
print("<td>".$rows["correo"]."</td>");
print("</tr>");
}
print("</table>");
$resultado->free();

*/

?>
