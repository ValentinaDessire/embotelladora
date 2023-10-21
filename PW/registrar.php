<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$cantidad = $_POST["cantidad"];

// Insertar datos en la base de datos
$sql = "INSERT INTO registros (fecha, hora, cantidad) VALUES ('$fecha', '$hora', $cantidad)";
if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
