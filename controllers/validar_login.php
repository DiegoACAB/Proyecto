<?php
include_once '../Models/conexion.php'; 
session_start();

if (isset($_POST['cor']) && isset($_POST['con'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usu = validar($_POST['cor']);
    $pass = validar($_POST['con']);

    if (empty($usu)) {
        header('Location: ../login.php?error=Usuario Requerido');
        exit();
    } elseif (empty($pass)) {
        header('Location: ../login.php?error=Contraseña Requerida');
        exit();
    }

    // Escapar el correo
    // $cor = mysqli_real_escape_string($conexion, $cor);

    $sql = "SELECT  id_usuario,nombre, correo_electronico, contrasena, id_rol FROM usuario WHERE correo_electronico = '$usu' and contrasena = '$pass'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) === 1) {
        $row = mysqli_fetch_assoc($resultado);
    
        // Verificar contraseña
        if ($row['correo_electronico'] === $usu && $row['contrasena'] === $pass) {
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['id_rol'] = $row['id_rol'];
    
            if ($row['id_rol'] == 1) {
                header('Location: ../interfazUsu.php');
            } elseif ($row['id_rol'] == 2) {
                header('Location: ../interfazAdmin.php');
            }
            exit();
        } else {
            header('Location: ../login.php?error=Usuario o contraseña incorrectos');
            exit();
        }
    } else {
        // Caso cuando no hay ningún usuario encontrado
        header('Location: ../login.php?error=Usuario o contraseña incorrectos');
        exit();
    }
    
}
?>