<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesion</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Inicia sesión</h1>
    <form action="iniciarsesion.php" method="GET">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <label for="contraseña">Contraseña: </label>
        <input type="text" name="contraseña" id="contraseña">
        <input type="submit" name="check" value="Iniciar sesión">
    </form>
    <h2>Registrate</h2>
    <form action="registrar.php" method="GET">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <label for="contraseña">Contraseña: </label>
        <input type="text" name="contraseña" id="contraseña">
        <input type="submit" name="check" value="Registrarse">
    </form>
</body>
</html>