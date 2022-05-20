<?php

$jsonContenido='[
    {"nombre":"David","apellido":"Santiago" },
    {"nombre":"Quiroga","apellido":"Rodriguez"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
        echo($persona->nombre)." ".($persona->apellido)."<br/>";
   }

   ?>