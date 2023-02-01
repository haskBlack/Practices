<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <form action="app/config/session.php" method="POST">
        <input type="text" class="txt-text" name="nickname" required placeholder="nickname">
        <input type="text" class="txt-text" name="passwor" required placeholder="password">
        <input type="submit" value="enviar" class="btn-enviar">
    </form>    

</body>
</html>