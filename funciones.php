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
    echo "La media de pax es: ".$totalpasajeros."<br>";

    echo "<br>";
}


function ultimosDestinos($var1,$vueloDestino){
    foreach ($vueloDestino as $city) {
     $vuelo=$city["Vuelo"];
     $ciudad=$city["Destino"];

        if ($vuelo==$var1) {
         echo "La última ciudad visitada es: ". $ciudad."<br>";
        }
    }

    echo "<br>";
}


function manufact($var1,$vueloFabricante){
    foreach ($vueloFabricante as $manufact) {
        $fabricante=$manufact["Fabricante"];
        $vuelo=$manufact["Vuelo"];

        if ($vuelo==$var1) {
            echo "El fabricante de este avión es: ". $fabricante."<br>";
        }
        
    }

    echo "<br>";
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

    echo "<br>";
}

//Funciones 2eCiudades.php

function todasciudades($vueloDestino){
    $duplicates=array_unique(array_column($vueloDestino,"Destino"));
    $apedra=array_intersect_key($vueloDestino, $duplicates);
    echo "El número total de ciudades visitadas es: ". count($apedra) ."<br>"."<br>";
}

function vecesciudad($vueloDestino){

    $holamilan=0;
    $holaroma=0;
    $holaestambul=0;
    $holamadriz=0;
    $holalima=0;
    $holabilbado=0;

    foreach ($vueloDestino as $tontito) {
        $roto2=$tontito["Destino"];

        if($roto2=="Milán"){
            $holamilan++;
        }elseif($roto2=="Roma"){
            $holaroma++;
        }elseif($roto2=="Estambul"){
            $holaestambul++;
        }elseif($roto2=="Madrid"){
            $holamadriz++;
        }elseif($roto2=="Lima"){
            $holalima++;
        }elseif($roto2=="Bilbao"){
            $holabilbado++;
        }
    }

    echo "Veces que se ha ido a Milán: ".$holamilan."<br>";
    echo "Veces que se ha ido a Roma: ".$holaroma."<br>";
    echo "Veces que se ha ido a Estambul: ".$holaestambul."<br>";
    echo "Veces que se ha ido a Madrid: ".$holamadriz."<br>";
    echo "Veces que se ha ido a Lima: ".$holalima."<br>";
    echo "Veces que se ha ido a Bilbao: ".$holabilbado."<br>";

    echo "<br>";
}

function statciudad($maxminciudad){

    rsort($maxminciudad);
    echo "Ciudad más visitada: ";
    $maxarray=(array_column($maxminciudad, "Ciudad"));
    $maxvisit=$maxarray[0];
    echo $maxvisit."<br>";

    echo "<br>";

    echo "Ciudades menos visitadas: ";
    $minarray = array_slice($maxminciudad, 1,5);
    foreach ($minarray as $eljose) {
        $minvisit=$eljose["Ciudad"];
        echo $minvisit."-";
    }

    echo "<br>"."<br>";
}

//Funciones 3eApt.php

function mediahorasvuelos($vueloDuracion){
    $totalpasajeros=0;
    $num=0;
    foreach ($vueloDuracion as $pasajerosf) {
        $vuelo=$pasajerosf["Vuelo"];
        $pax=$pasajerosf["Minutos"];
        $totalpasajeros=$totalpasajeros+$pax;
        $num++;
    }
    $totalpasajeros=$totalpasajeros/$num/60;
   
    echo "Media de horas voladas: ".$totalpasajeros."<br>";

    echo "<br>";
}   

$totalpasajeros=0;
function todospasajeros($vueloPasajeros,$totalpasajeros){
    foreach ($vueloPasajeros as $pasajerosf) {
        $pax=$pasajerosf["Pasajeros"];
        $totalpasajeros=$totalpasajeros+$pax;
    }
   
    echo "Total de pasajeros de los vuelos: ".$totalpasajeros."<br>";

    echo "<br>";
}

function fabricantes($vueloFabricante){
    $boeing=0;
    $airbus=0;
    foreach ($vueloFabricante as $manufact) {
        $fabricante=$manufact["Fabricante"];

        if ($fabricante=="Boeing") {
            $boeing++;
        } elseif ($fabricante=="Airbus"){
            $airbus++;
        }
        
    }
    echo "Aviones Boeing: ".$boeing."<br>";
    echo "Aviones Airbus: ".$airbus."<br>";

    echo "<br>";
}

function ciudadconex($maxminciudad){

    rsort($maxminciudad);
    echo "Destino con más conexiones: ";
    $maxarray=(array_column($maxminciudad, "Ciudad"));
    $maxvisit=$maxarray[0];
    echo $maxvisit."<br>";

    echo "<br>";

    echo "Destino con menos conexiones: ";
    $minarray = array_slice($maxminciudad, 2,5);
    foreach ($minarray as $eljose) {
        $minvisit=$eljose["Ciudad"];
        echo $minvisit."-";
    }

    echo "<br>"."<br>";
}

//Funciones 4eAvion.php




?>