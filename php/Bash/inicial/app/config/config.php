<?php

    // Configuracion DB

    define('DB_HTTP_SERVER','localhost');
    define('DB_HTTP_USER','root');
    define('DB_HTTP_PASSWORD','');
    define('DB_HTTP_DB','padrino');

    $conexion = new mysqli(DB_HTTP_SERVER,DB_HTTP_USER,DB_HTTP_PASSWORD,DB_HTTP_DB);

    if ($conexion) {
        echo 'Conexion Exitoso...';
    } else {
        echo 'Error al conectar con la DB...';
    }
    

?>