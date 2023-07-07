<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Registro de Usuarios</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="contrasena" placeholder="Contraseña" required><br>
        <button type="submit">Iniciar sesión</button>
    </form>
    <p>No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>

