<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validación básica (puedes agregar más validaciones según tus necesidades)
    if (empty($username) || empty($password)) {
        echo "Por favor, completa todos los campos.";
    } else {
        // Conectar a la base de datos (reemplaza con tus propias credenciales)
        $dsn = 'mysql:host=localhost;dbname=censo';
        $usuario_bd = 'root';
        $contraseña_bd = '';

        try {
            $conn = new PDO($dsn, $usuario_bd, $contraseña_bd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Procesar registro (usar sentencias preparadas para mayor seguridad)
            $query = "INSERT INTO usuarios (usuario, contraseña) VALUES (:username, :password)";
            $stmt = $conn->prepare($query);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->execute();

            echo "Registro exitoso";
        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
    }
}
?>