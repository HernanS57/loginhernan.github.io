<?php


function conectarDb () : mysqli {
    $db = mysqli_connect('localhost','root','1234',"login");
    if (!$db){
        echo 'error no se pudo conectar';
        exit;
    }
    return $db;
}

