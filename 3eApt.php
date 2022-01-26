<?php

include_once "arraysDB.php";
include_once "funciones.php";

echo "<h2>Estadísticas del Aeropuerto</h2>";

mediahorasvuelos($vueloDuracion);
todospasajeros($vueloPasajeros,$totalpasajeros);
fabricantes($vueloFabricante);
ciudadconex($maxminciudad);

?>