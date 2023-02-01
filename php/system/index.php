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
    <title>Log in</title>
</head>
<body>

    <h1>Inicio de Session</h1>

<form action="app/config/session_start.php" method="POST">
    <input type="text" name="username" placeholder="usuario">
    <input type="text" name="password" placeholder="contrasena">
    <input type="submit" value="Iniciar Session">
</form>
    
</body>
</html>