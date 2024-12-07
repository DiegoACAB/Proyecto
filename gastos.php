<h2>Gastos</h2>
<form action="procesar_gastos.php" method="POST">
    <label for="nombre_gasto">Nombre del Gasto:</label>
    <input type="text" id="nombre_gasto" name="nombre_gasto" required>

    <label for="monto_gasto">Monto:</label>
    <input type="number" id="monto_gasto" name="monto_gasto" step="0.01" required>

    <label for="fecha_gasto">Fecha:</label>
    <input type="date" id="fecha_gasto" name="fecha_gasto" required>

    <button type="submit">Añadir Gasto</button>
</form>

<!-- Mostrar lista de gastos -->
<?php
$result = $conexion->query("SELECT * FROM gastos");
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Nombre</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nombre_gasto']}</td>
                <td>{$row['monto_gasto']}</td>
                <td>{$row['fecha_gasto']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No hay gastos registrados.</p>";
}
?>
