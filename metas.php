<h2>Metas</h2>
<form action="procesar_metas.php" method="POST">
    <label for="nombre_meta">Nombre de la Meta:</label>
    <input type="text" id="nombre_meta" name="nombre_meta" required>

    <label for="monto_meta">Monto Objetivo:</label>
    <input type="number" id="monto_meta" name="monto_meta" step="0.01" required>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" required>

    <label for="fecha_final">Fecha de Finalización:</label>
    <input type="date" id="fecha_final" name="fecha_final" required>

    <button type="submit">Añadir Meta</button>
</form>
