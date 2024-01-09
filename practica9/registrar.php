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
    
        $consulta = $conexion->prepare('INSERT INTO usuarios (usuario, contrasena) VALUES (:usuario, :contrasena)');
        $consulta->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $consulta->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $consulta->execute();
        echo "Datos insertados correctamente en la base de datos.";

} catch (PDOException $e) {
    // Manejar errores de la conexión a la base de datos
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>
