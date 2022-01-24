<?php

include_once "arraysDB.php";
include_once "funciones.php";
$var1=$_POST["vuelo"];

echo "Vuelo: ". $var1 . "<br>";

mediaPasajeros($var1,$vueloPasajeros);
ultimosDestinos($var1,$vueloDestino);
fabricante($var1,$vueloFabricante);
minutosTotales($var1,$vueloDuracion);

?>