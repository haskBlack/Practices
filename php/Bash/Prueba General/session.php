<?php

    session_start();

    $_SESSION['username'] = $_POST['nickname'];
    $_SESSION['passw']    = $_POST['passwor'];
    header('location: dashboard.php');

?>