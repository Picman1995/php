<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Registro de Usuarios</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="registrar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="contrasena" placeholder="Contraseña" required><br>
        <button type="submit">Registrarse</button>
    </form>
    <p>Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
</body>
</html>

