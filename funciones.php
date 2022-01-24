<?php

include_once "arraysDB.php";

//Funciones 1mVuelo2.php

function mediaPasajeros($var1,$vueloPasajeros){
    $num=0;
    $totalpasajeros=0;
    foreach ($vueloPasajeros as $pasajerosf) {
        $vuelo=$pasajerosf["Vuelo"];
        $pax=$pasajerosf["Pasajeros"];

        if ($vuelo==$var1) {
           $totalpasajeros=$totalpasajeros+$pax;
           $num++;
        }
    }
    $totalpasajeros=$totalpasajeros/$num;
    echo "La media de pasajeros es: ".$totalpasajeros."<br>";
}


function ultimosDestinos($var1,$vueloDestino){
    foreach ($vueloDestino as $city) {
     $vuelo=$city["Vuelo"];
     $ciudad=$city["Destino"];

        if ($vuelo==$var1) {
         echo "La última ciudad visitada es: ". $ciudad."<br>";
        }
}
}


function fabricante($var1,$vueloFabricante){
    foreach ($vueloFabricante as $manufact) {
        $fabricante=$manufact["Fabricante"];
        $vuelo=$manufact["Vuelo"];

        if ($vuelo==$var1) {
            echo "El fabricante de este avión es: ". $fabricante."<br>";
        }
        
    }
}


function minutosTotales($var1,$vueloDuracion){
    $num=0;
    foreach ($vueloDuracion as $duracion) {
        $vuelo=$duracion["Vuelo"];

        if ($vuelo==$var1) {
            $time=$duracion["Minutos"];
            $num=$num+$time;
        }
    }
    echo "Los minutos totales son: ".$num."<br>";
}



//Funciones 2eCiudades.php



//Funciones 3eApt.php



//Funciones 4eAvion.php




?>