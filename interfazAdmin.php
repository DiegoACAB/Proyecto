<?php
session_start();
if (!isset($_SESSION['nombre']) || $_SESSION['id_rol'] != 2) { // Asegúrate de que el usuario sea un admin
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinzApp Dashboard Admin</title>
    <link rel="stylesheet" href="css/interusu.css">
</head>
<body>
    <div class="dashboard">
        <!-- Barra lateral de navegación -->
        <nav class="sidebar">
            <h2>FinzApp Admin</h2>
            <p><?php echo ($_SESSION['nombre']); ?></p>
            <ul>
                <li><a href="?section=usuarios">Gestión de Usuarios</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>

        <!-- Contenido principal -->
        <div class="content">
        <?php
    include "Models/conexion.php";
    $where = "";

    // Verificar si se carga o no la información
    if (!empty($_POST)) {
        $valor = $_POST['nombre'];
        if (!empty($valor)) {
            $where = "WHERE nombre LIKE '%$valor%'";
        }
    }

    // Consulta SQL para obtener los usuarios
    $sql = "SELECT * FROM usuario $where";
    $resultado = $conexion->query($sql);
    ?>

    <h2>Bienvenido al panel de administración de FinzApp</h2>

    <p class="h1">Lista de Usuarios</p>
    <div class="row" style="float:left">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mb-3 mt-3 p-1">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3 mt-3 p-1">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado">
            </div>
            <div class="mb-2 mt-2 p-1">
                <input type="submit" class="form-control btn btn-info" id="enviar" name="enviar" value="Buscar">
            </div>
        </form>
    </div>

    <div class="container mt-3">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Estado</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // Verifica si hay resultados en la consulta
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['estado']; ?></td>
                            <td><?php echo ($row['id_rol'] === null) ? 'selected' : ''; ?></td>
                            
                <?php
                    }
                }
                ?>
                
            </tbody>
        </table>
    </div>
    
</body>
</html>

