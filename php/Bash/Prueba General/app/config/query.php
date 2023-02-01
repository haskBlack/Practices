<?php
    require 'config.php';

/*
    //////////    Imprimir en pantalla registro

    $sql = "select * from usersnames";
    $result = $conexion->query($sql);

    if (!$result)die("Fatal Error...");
    
    $rows = $result->num_rows;

    for($j=0;$j<$rows;$j++){
        $row = $result->fetch_array(MYSQLI_ASSOC);

        echo 'nickname: ' .htmlspecialchars($row['nickname']).'<br>';
    }


    //////////      Creacion de una tabla
    $inicial = $_POST['original'];
    $final = $inicial + '98';
    $cadena = ('M00'.$inicial.'M00'.$final);

    $sql = "create table ".$cadena."(id_columna1 integer, columna2 varchar(10), columna3 varchar(10))";
    $result = $conexion->query($sql);
    if(!$result){
        echo 'Fatal Error';
    }else{
        echo 'Base de Datos Creada';
    }


    ///////////     Agregar datos a la DB
        $nickname = $_POST['nickname'];
        $password = md5($_POST['password']);
        $firstn   = $_POST['firstname'];
        $secondn  = $_POST['secondname'];
        $firstlas = $_POST['firstlastname'];
        $secondlas= $_POST['secondlastname'];


    $sql = "insert into usersnames values(not null,'$nickname','$password','$firstn','$secondn','$firstlas','$secondlas')";
    $result = $conexion->query($sql);

    if (!$result) {
        echo 'Error al ingresar los datos a la tabla';
    } else {
        echo 'Los datos fueron registrados con exito...';
    }
    


    ////////////    Eliminar tabla de DB

    $sql = "drop table ejemplo";
    $result = $conexion->query($sql);

    if (!$result) {
        echo "No es posible Eliminar la tabla";
    } else {
        echo 'La Eliminacion de la tabla fue un exito...';
    }
    


    ////////////    Recuperacion de informacion en pantalla

    $sql = "select * from usersnames";
    $result = $conexion->query($sql);

    $rows = $result->num_rows;
        echo '
        <table>
            <tr>
                <td>Id user</td>
                <td>Nickname</td>
                <td>Password</td>
                <td>first Name</td>
                <td>Second Name</td>
                <td>First Lastname</td>
                <td>Second Lastname</td>
            </tr>';
        

    for($j=0; $j<$rows ;$j++){
        $row=$result->fetch_array(MYSQLI_NUM);
        echo '<tr>';
        for($k=0; $k<7; $k++)
            echo '<td>'. htmlspecialchars($row[$k]).'</td>';
         echo   '</tr>';
        }
echo'    </table>';
  
*/

        //////////      Eliminar un registro de la tabla por id

        $nickname = $_POST['original'];

        $sql = "Delete from usersnames where nickname='$nickname'";
        $result = $conexion->query($sql);

        if (!$result) {
            echo 'No es posible eliminar el registro';
        } else {
            echo 'El registro seleccionado ha sido eliminado';
        }
        




?>