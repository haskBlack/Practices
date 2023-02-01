<?php
// Configuracion Conexion DataB
//
/*
    $servier    = 'localhost';
    $username   = 'root';
    $passw      = '';
    $dataB      = 'padrino';

    $conexion = new mysqli($servier,$username,$passw,$dataB);
    if($conexion->connect_error)die('Fatal Error...');

    $conexion = new mysqli('localhost','root','','padrino');
*/
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','padrino');

  //  $_SESSION['PHP_AUTH_USER'] = $_POST['nickname'];
  //  $_SESSION['PHP_AUTH_PW']   = $_POST['password'];

    $conexion = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if($conexion->connect_error)die('Fatal Error...');

?>