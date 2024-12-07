<?php
include "../models/conexion.php";

$id = $_GET['id'];
$sql = "SELECT * FROM ingresos WHERE id_ingreso = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo "<h1>Detalles del ingreso</h1>";
    echo "<p>Nombre: " . $row['nombre_ingreso'] . "</p>";
    echo "<p>Monto: $" . $row['monto_ingreso'] . "</p>";
    echo "<p>Fecha: " . $row['fecha_ingreso'] . "</p>";
} else {
    echo "Ingreso no encontrado.";
}
?>
