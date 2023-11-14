<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>INICIO DE SESION</h1>";
?>
<form action="comprobar.php" method="post">
    
    Usuario: <input name="user" type="text">
    Contraseña: <input name="password" type="password" >
    <input type="submit" name="enviar" value="iniciar sesion">
</form>
</body>
</html>
