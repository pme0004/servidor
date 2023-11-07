<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
<?php
echo "<h1>INICIO DE SESION</h1>";
// he usado un metodo post porque es mas seguro para enviar las contraseñas, si hubiese usado un get se enviarian atraves 
// de la url, lo cual no es nada seguro
?>
<form action="comprobar.php" method="post"> 
    Usuario: <input name="user" type="text">
    Contraseña: <input name="password" type="password" >
    <input type="submit" name="enviar" value="iniciar sesion">
</form>
</body>
</html>