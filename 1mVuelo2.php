<?php

include_once "arraysDB.php";
include_once "funciones.php";
$var1=$_POST["vuelo"];

echo "<title>Vuelo ". $var1 ."</title>";

echo "<fieldset>";
echo "<legend>"."<h2>Vuelo: ". $var1 ."</h2>"."</legend>";

mediaPasajeros($var1,$vueloPasajeros);
ultimosDestinos($var1,$vueloDestino);
manufact($var1,$vueloFabricante);
minutosTotales($var1,$vueloDuracion);

echo "</fieldset>"."<br>";

$link="1mVuelo.html";
echo "<a href='".$link."'>Seleccionar otro vuelo</a>";

echo "<br>"."<br>";

$link="index.html";
echo "<a href='".$link."'>Volver al índice</a>";

?>