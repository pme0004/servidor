<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Panel</title>
</head>
<body>
    <h1>Introduce personas al censo</h1>
    <form action="back.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos">
        <label for="ciudad_nacimiento">Ciudad de nacimiento: </label>
        <input type="text" name="ciudad_nacimiento" id="ciudad_nacimiento">
        <label for="fecha_nacimiento">Fecha de nacimiento: </label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
        <button type="submit" name="registar">Insertar datos</button>
    </form>
    <h2>Registro de personas</h2>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Ciudad de nacimiento</td>
            <td>Fecha de nacimiento</td>
            <td>Opciones</td>
        </tr>
        <?php
        include "back.php";
        mostrarcenso();
        ?> 
    </table>
</body>
</html>