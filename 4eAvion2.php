<?php

include_once "arraysDB.php";
include_once "funciones.php";
$var1=$_POST["vuelo"];

echo "<title>Avión ". $var1 ."</title>";

echo "<fieldset>";
echo "<legend>"."<h2>Avión: ". $var1 ."</h2>"."</legend>";

destinosAvion($var1,$vueloDestino);
manufact($var1,$vueloFabricante);
minutosTotales($var1,$vueloDuracion);
mediaHhoras($var1,$vueloDuracion);
mediaPasajeros($var1,$vueloPasajeros);
totalPasajeros($var1,$vueloPasajeros);

echo "</fieldset>"."<br>";

$link="4eAvion.html";
echo "<a href='".$link."'>Seleccionar otro avión</a>";

echo "<br>"."<br>";

$link="index.html";
echo "<a href='".$link."'>Volver al índice</a>";

?>