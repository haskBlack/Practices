    <?
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="app/css/style.css">
</head>
<body>

<form action="session.php" method="post">
    <input type="text" name="nickname" class="txt_text" placeholder="">
    <input type="text" name="passwor" class="txt_text" placeholder="">
    <input type="submit" class="btn_submit" value="Log in">
</form>

</body>
</html>