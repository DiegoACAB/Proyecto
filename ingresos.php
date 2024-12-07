<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Ingresos</h2>

        <!-- Formulario para registrar nuevos ingresos -->
        <form method="POST" action="ingresos.php">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre del ingreso</th>
                        <th>Monto</th>
                        <th>Fecha del ingreso</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="nombre_ingreso" name="nombre_ingreso" class="form-control" required></td>
                        <td><input type="number" id="monto_ingreso" name="monto_ingreso" class="form-control" step="0.01" required></td>
                        <td><input type="date" id="fecha_ingreso" name="fecha_ingreso" class="form-control" required></td>
                        <td><button type="submit" class="btn btn-success">Añadir</button></td>
                    </tr>
                </tbody>
            </table>
        </form>

        <!-- Tabla para mostrar y gestionar ingresos -->
        <h3 class="mt-4">Lista de Ingresos</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del ingreso</th>
                    <th>Monto</th>
                    <th>Fecha del ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "models/conexion.php";
                $sql = "SELECT id_ingreso, nombre_ingreso, monto_ingreso, fecha_ingreso FROM ingresos";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nombre_ingreso'] . "</td>";
                        echo "<td>" . $row['monto_ingreso'] . "</td>";
                        echo "<td>" . $row['fecha_ingreso'] . "</td>";
                        echo "<td>";
                        echo "<a href='ing/ver_ingreso.php?id=" . $row['id_ingreso'] . "' class='btn btn-info btn-sm'>Ver</a> ";
                        echo "<a href='ing/modificar_ingreso.php?id=" . $row['id_ingreso'] . "' class='btn btn-warning btn-sm'>Modificar</a> ";
                        echo "<a href='ing/eliminar_ingreso.php?id=" . $row['id_ingreso'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de eliminar este ingreso?\");'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo '<tr><td colspan="4" class="text-center">No se han registrado ingresos</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
