<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>panel de control</h1>
    <h2>Bienvenido 
        <?php
        echo $_SESSION['usuario'];
        ?>
    </h2>
</body>
</html>