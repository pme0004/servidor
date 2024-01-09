<?php
//aqui se conecta a la base de datos de la base de datos
$dsn = 'mysql:host=localhost;dbname=censo';
$userdb = 'root';
$passdb = '';
$conexion = new PDO($dsn, $userdb, $passdb);
//aqui se muestra con un while lo que hay dentro de la base de datos
function mostrarcenso() {
    global $conexion;
    $result = $conexion->query("SELECT * FROM persona");

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['nombre']}</td>";
        echo "<td>{$row['apellidos']}</td>";
        echo "<td>{$row['ciudad_nacimiento']}</td>";
        echo "<td>{$row['fecha_nacimiento']}</td>";
        echo "<td><button>Editar</button><button>Borrar</button></td>";
        echo "</tr>";
    }
}
// Operación de registro
if (isset($_POST["registar"])) {
    $nombre = $_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $ciudad_nacimiento = $_POST["ciudad_nacimiento"];
    $fecha_nacimiento=$_POST["fecha_nacimiento"];
    $conexion->query("INSERT INTO persona (nombre, apellidos, ciudad_nacimiento, fecha_nacimiento) VALUES ('$nombre', '$apellidos', '$ciudad_nacimiento', '$fecha_nacimiento')");
}

if(isset($_POST["borrar"])){
    $id=$_POST["borrar"];
    $conexion->query("delete from persona where id=$id");
}
?>