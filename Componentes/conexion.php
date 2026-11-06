
<?php

$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "son_como_ninos";

try {
    $conexion = new mysqli(
        $host,
        $usuario,
        $password,
        $base_datos
    );

    $conexion->set_charset("utf8mb4");

} catch (mysqli_sql_exception $e) {
    die("Error al conectar con la base de datos.");
}

?>
