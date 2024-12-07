<h2>Pagos</h2>
<form action="procesar_pagos.php" method="POST">
    <label for="nombre_pago">Nombre del Pago:</label>
    <input type="text" id="nombre_pago" name="nombre_pago" required>

    <label for="valor">Valor:</label>
    <input type="number" id="valor" name="valor" step="0.01" required>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" required>

    <label for="fecha_final">Fecha Final:</label>
    <input type="date" id="fecha_final" name="fecha_final" required>

    <button type="submit">Añadir Pago</button>
</form>
