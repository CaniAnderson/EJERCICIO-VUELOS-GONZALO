<?php

echo "<title>Estadísticas del Aeropuerto</title>";

include_once "arraysDB.php";
include_once "funciones.php";

echo "<fieldset>";
echo "<legend>"."<h2>Estadísticas del Aeropuerto</h2>"."</legend>";

mediahorasvuelos($vueloDuracion);
todospasajeros($vueloPasajeros,$totalpasajeros);
fabricantes($vueloFabricante);
ciudadconex($maxminciudad);

echo "</fieldset>"."<br>";

$link="index.html";
echo "<a href='".$link."'>Volver al índice</a>";

?>