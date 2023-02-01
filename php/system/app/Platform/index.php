<?php
    require '../config/config.php';
    session_start();
    error_reporting();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Principal</title>
</head>
<body>

    <h1>SOLICITUDES</h1>
    <form action="../config/query_solicitud.php" method="POST">
        <select name="select_destine" id="">
            <option value="">Selecciona el Destino</option>
            <option value="LOCAL">DESTINO LOCAL</option>
            <option value="TRUNKING">DESTINO TRUNKING</option>
            <option value="CONSOL">DESTINO CONSOL</option>
        </select>

        <select name="select_tienda" id="">
            <option value="">Selecciona la Tienda Club</option>
            <?php
                $sql = "select * from db_table_destine";
                $result=$conexion->query($sql);

                if(!$result)die("Error Fatal");
            
                $rows = $result->num_rows;

                for($j=0;$j<$rows;$j++){
                    $row=$result->fetch_array(MYSQLI_ASSOC);?>

                <option value="<?php echo htmlspecialchars($row['Determinante']); ?>"><?php echo htmlspecialchars($row['Determinante']); ?></option>

            <?php                    

                }

            ?>


        </select>

                <select name="select_door" id="">
                    <option value="">selecciona la Cortina</option>
                    <?php
                $sql = "select * from db_table_doors";
                $result=$conexion->query($sql);

                if(!$result)die("Error Fatal");
            
                $rows = $result->num_rows;

                for($j=0;$j<$rows;$j++){
                    $row=$result->fetch_array(MYSQLI_ASSOC);?>

                <option value="<?php echo htmlspecialchars($row['door']); ?>"><?php echo htmlspecialchars($row['door']); ?></option>

            <?php                    

                }

                $result->close();
                $conexion->close();
            ?>

                </select>

        <input type="submit" value="Generar solicitud">
    </form>

    <br><br><br>

    <h1>CAPTURACION</h1>

    <form action="">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </form>


    
</body>
</html>