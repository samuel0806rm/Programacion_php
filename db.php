<?php
$hostDB = "localhost";
$userDB = "root";
$pwdDB = "";
$nameDB = "examen_pr2";
//$sportDB = "3306";

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB-> connect_error) {
    echo "Error en la conexion";
    die();
}


echo "Conexion exitosa";
echo '<br>';
$sql = "select * from personas";
$restDB = $conexDB->query($sql);

if ($restDB->num_rows > 0) {
    while ($row = $restDB->fetch_assoc()) {
        echo $row['id'] ." ". $row['nombre'] ." ". $row['email'] ." ". $row['edad'];
        echo '<br>';
    }
}

$conexDB->close();