<?php

function conectarDB() : mysqli{

    $db = mysqli_connect('localhost','root','','telcelreport');
    
    if (!$db){

        echo "ERROR no se pudo conectar a la base de datos";
        exit;
    }

    return $db;
}

?>