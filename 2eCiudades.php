<?php

include_once "arraysDB.php";
include_once "funciones.php";

echo "<h2>Estadísticas de las Ciudades</h2>";

todasciudades($vueloDestino);
vecesciudad($vueloDestino);
statciudad($maxminciudad);

?>