<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recuperar datos del formulario
    $usuario = $_GET["usuario"];
    $contraseña = $_GET["contraseña"];

    // Validación básica (puedes agregar más validaciones según tus necesidades)
    if (empty($usuario) || empty($contraseña)) {
        echo "no has rellenado los dos campos";
    } else {
        // Conectar a la base de datos (reemplaza con tus propias credenciales)
        $dsn = 'mysql:host=localhost;dbname=censo';
        $usuario_bd = 'root';
        $contraseña_bd = '';

        try {
            $conexion = new PDO($dsn, $usuario_bd, $contraseña_bd);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Procesar registro (usar sentencias preparadas para mayor seguridad)
            $query = "INSERT INTO usuarios (usuario, contraseña) VALUES (:usuario, :contraseña)";
            $stmt = $conexion->prepare($query);
            $contraseña_hasheada = password_hash($contraseña, PASSWORD_DEFAULT);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contraseña', $contraseña_hasheada);
            $stmt->execute();

            echo "Registro exitoso";
        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
    }
}
?>