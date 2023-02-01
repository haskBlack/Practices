<?php
    session_start();
    error_reporting(0);
    $varsession = $_SESSION['username'];
    if ($varsession == null || $varsession = '') {
        echo 'Usted no tiene autorizacion';
    die("exito");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Panel de control</h1>
    <h2>Bienvenido:
    <?php
        echo $_SESSION['username'];
    ?>
    </h2>
    <h3>Su contrasena es:
        <?php
            echo $_SESSION['passw'];
        ?>
    </h3>

    <a href="logout.php">Cerrar session</a>
</body>
</html>