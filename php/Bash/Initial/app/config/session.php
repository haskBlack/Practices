<?php
    require 'config.php';
    session_start();
    error_reporting();

    $_SESSION['HTTP_USERNAME'] = $_POST['nickname'];
    $_SESSION['HTTP_PASSWORD'] = $_POST['passwor'];

    $nickname = $_POST['nickname'];
    $password = $_POST['passwor'];

    $sql = "select * from usersnames where nickname='$nickname' and passw='$password'";
    $result = $conexion->query($sql);

    if ($datos=$result->fetch_object()) {
        header('location: ../Platform/Dashboard.php');
    } else {
        header('location: ../../index.php');
        echo 'Usuario o contraseña Incorrecta Favor de intentar de nuevo...';
    }
    










/*
    if (($_SESSION['HTTP_NICKNAME']='Victor')and($_SESSION['HTTP_PASSWORD']='Armand2022*')) {
        header('location: ../Platform/Dashboard.php');
    } else {
        echo 'Error al Iniciar Session, favor de intentar nuevamente';
        header('location: ../../index.php');
    }
  */
  
  

?>