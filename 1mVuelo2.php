<?php

include_once "arraysDB.php";
include_once "funciones.php";
$var1=$_POST["vuelo"];

echo "<h2>Vuelo: ". $var1 ."</h2>";

mediaPasajeros($var1,$vueloPasajeros);
ultimosDestinos($var1,$vueloDestino);
manufact($var1,$vueloFabricante);
minutosTotales($var1,$vueloDuracion);

?>