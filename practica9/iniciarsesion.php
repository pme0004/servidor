<?php
// Configuración de la conexión a la base de datos
$dsn = 'mysql:host=localhost;dbname=censo';
$userdb = 'root';
$passdb = '';

try {
    // Crear una conexión PDO
    $conexion = new PDO($dsn, $userdb, $passdb);

    // Configurar el modo de error y excepción de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recuperar datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar los datos en la base de datos
    $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena");
    $consulta->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $consulta->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
    $consulta->execute();

    // Verificar si se encontraron resultados
    if ($consulta->rowCount() > 0) {
        header("Location:panel.php");
    } else {
        echo "Los datos no existen en la base de datos.";
    }

} catch (PDOException $e) {
    // Manejar errores de la conexión a la base de datos
    echo "aaaaaaaaaa: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>
