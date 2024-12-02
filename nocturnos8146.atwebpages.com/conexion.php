<?php
$servername = "fdb1028.awardspace.net";
$username = "4558782_nocturnos";
$password = "k@tty/08@.X";
$dbname = "4558782_nocturnos";

// Crear la conexión usando $conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>