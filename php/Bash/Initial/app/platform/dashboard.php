<?php
    session_start();
    error_reporting();
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
    <h1>Bienvenido 
        <?php
            echo $_SESSION['HTTP_USERNAME'];
        ?>
    </h1>
    <h2>
        <?php
            echo $_SESSION['HTTP_PASSWORD'];
        ?>
    </h2>

</body>
</html>