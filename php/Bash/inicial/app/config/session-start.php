<?php
    require  'config.php';
    session_start();
    error_reporting();

    $_SESSION['HTTP_NICKNAME'] = $_POST['nickname'];
    $_SESSION['HTTP_PASSWORD'] = $_POST['passwor'];

    $username = $_POST['nickname'];
    $pw     = $_POST['passwor'];

    $sql = "select * from usersnames where nickname='$username' and passw='$pw'";
    $result = $conexion->query($sql);

    if ($datos=$result->fetch_object()) {
        header('location: ../Platform/index.php');
    } else {
        header('location: ../../index.php');
        echo 'Usuario o contrasena no valido, favor de intentar nuevamente';
    }
    



?>