
<?php
    session_start();
    if (isset($_SESSION['nombre']));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinzApp Dashboard</title>
    <link rel="stylesheet" href="css/interusu.css">
</head>
<body>
    <div class="dashboard">
        <!-- Barra lateral de navegación -->
        <nav class="sidebar">
            <h2>FinzApp</h2>
            <p><?php  echo ($_SESSION['nombre']); ?></p>
            <ul>
                <li><a href="?section=ingresos">Ingresos</a></li>
                <li><a href="?section=gastos">Gastos</a></li>
                <li><a href="?section=balance">Balance</a></li>
                <li><a href="?section=metas">Metas</a></li>
                <li><a href="?section=pagos">Pagos</a></li>
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </ul>
        </nav>

        <!-- Contenido principal -->    
        <div class="content">
            <?php
                // Mostrar diferentes secciones según la URL
                if (isset($_GET['section'])) {
                    $section = $_GET['section'];
                    switch ($section) {
                        case 'ingresos':
                            include 'ingresos.php';
                            break;
                        case 'gastos':
                            include 'gastos.php';
                            break;
                        case 'balance':
                            include 'balance.php';
                            break;
                        case 'metas':
                            include 'metas.php';
                            break;
                        case 'pagos':
                            include 'pagos.php';
                            break;
                        default:
                            echo "<h2>Sección no válida</h2>";
                    }
                } else {
                    // Si no hay sección, mostrar una página de bienvenida
                    echo "<h2>Bienvenido a FinzApp</h2>";
                }
            ?>
        </div>
    </div>
</body>
</html>
