<?php

echo "<title>Estadísticas de las Ciudades</title>";

include_once "arraysDB.php";
include_once "funciones.php";

echo "<fieldset>";
echo "<legend>"."<h2>Estadísticas de las Ciudades</h2>"."</legend>";

todasciudades($vueloDestino);
vecesciudad($vueloDestino);
statciudad($maxminciudad);

echo "</fieldset>"."<br>";



$link="index.html";
echo "<a href='".$link."'>Volver al índice</a>";

?>