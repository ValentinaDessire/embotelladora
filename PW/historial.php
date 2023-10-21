<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$sql = "SELECT fecha, hora, cantidad FROM registros";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["fecha"] . "</td>";
        echo "<td>" . $fila["hora"] . "</td>";
        echo "<td>" . $fila["cantidad"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 resultados";
}

$conexion->close();
?>
