<?php
    require 'config.php';
    session_start();


    $_SESSION['HTTP_USERNAME'] = $_POST['username'];
    $_SESSION['HTTP_PASSWORD']  = $_POST['password'];

    $username = $_POST['username'];
    $pw = $_POST['password'];

    $sql = "select * from db_table_user where nickname='$username' and password='$pw'";
    $result =$conexion->query($sql);

    if ($datos=$result->fetch_object()) {
        header('location: ../Platform/index.php');
    } else {
        header('location: ../../index.php');
        echo 'Usuario o contrasena no validos';
    }
    
?>