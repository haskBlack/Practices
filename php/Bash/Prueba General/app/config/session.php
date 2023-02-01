<?php
/*
    require 'config.php';
    session_start();

    $nickname = $_POST['nickname'];
    $passw    = $_POST['password'];

    $sql = $conexion->query("select * from usersnames where nickname='$nickname' and passw='$passw' ");

    if ($datos=$sql->fetch_object()) {
        header('location: ../Platform/Dashboard.php');
    } else {
        echo 'Error al inicio de session';
    }
  */

    session_start();
    $_SESSION['usuario'] = 'victor';
    header('location: ../Platform/Dashboard.php');
    ?>