<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

// Obtener el usuario actual de la sesión
$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Registro de Usuarios - Perfil</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario; ?></h1>
    <p>Esta es tu página de perfil.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>

