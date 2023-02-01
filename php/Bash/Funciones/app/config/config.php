<?php

function conection(){

    // Conexion con DB

    define('DBS_HTTP_SERVER','localhost');
    define('DBS_HTTP_USER','root');
    define('DBS_HTTP_PASSWORD','');
    define('DBS_HTTP_DB','padrino');

    $conexion = new mysqli(DBS_HTTP_SERVER,DBS_HTTP_USER,DBS_HTTP_PASSWORD,DBS_HTTP_DB);

    if ($conexion) {
        echo "Conexion Exitosa...";
    } else {
        echo 'Error al conectar a la DB...';
    }
    return conection();

}

function log_in(){

}

function log_out(){

}

?>