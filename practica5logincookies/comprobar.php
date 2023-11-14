<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion iniciada</title>
</head>

<body>
    <?php
    session_start();
    $user = $_POST["user"];
    $password = $_POST["password"];
    comprobar($user, $password);

    function comprobar($user, $password)
    {
        $_SESSION['user'] = $user;

        if ($user == "admin") {
            $_SESSION["rol"] = "admin";
        } else {
            $_SESSION["rol"] = "client";
        }

        if ($_SESSION["rol"] == "admin") {
            if ($password == "1234") {
                echo "<p>contraseña correcta</p>";
                echo $hora = date("H:i:s");
                echo "<br>";
                echo $fecha =date("d-m-Y");
                echo "<br>";
                echo " La hora es: " . $hora . " y la fecha es: " . $fecha;
            } else {
                echo "<p>contraseña incorrecta</p>";
                header('Location: index.php');
                exit();
            }

            if (isset($_POST["ruta"])) {
                $current_url = $_SERVER['REQUEST_URI'];
                echo "<p>Estás en: </p> " . $current_url;
            }

            if (isset($_POST["buscarfichero"])) {
                $rutaDirectorio = "C:/xampp/htdocs/practica5logincookies/";
                $nombrefichero = $_POST["fichero"];

                echo "Archivos encontrados en la ruta $rutaDirectorio que coinciden con '$nombrefichero':<br>";

                $archivos = scandir($rutaDirectorio);

                foreach ($archivos as $archivo) {
                    if (strpos($archivo, $nombrefichero) !== false) {
                        echo $archivo . "<br>";
                    }
                }
            }

            if (isset($_POST["creafichero"])) {
                $nombreNuevoArchivo = $_POST["nombreNuevoArchivo"];
                $contenidoNuevoArchivo = "Este es el contenido del nuevo archivo.";
                $nombreNuevoArchivoConSufijo = $nombreNuevoArchivo;
                $rutaNuevoArchivo = "C:/xampp/htdocs/practica5logincookies/" . $nombreNuevoArchivoConSufijo;

                if (file_put_contents($rutaNuevoArchivo, $contenidoNuevoArchivo) !== false) {
                    chmod($rutaNuevoArchivo, 0644);
                    echo "El archivo $nombreNuevoArchivoConSufijo se ha creado y escrito con éxito.";
                } else {
                    echo "No se pudo crear el archivo.";
                }
            }

            echo '
<form method="post">
<br>
<input type="submit" name="ruta" value="Obten la url de la pagina actual"/>
<br>
<br>
<input type="text" name="nombreArchivo" placeholder="Nombre del archivo" />
<input type="submit" name="buscarfichero" value="Buscar Archivo" />
<br>
<br>
<input type="text" name="nombreNuevoArchivo" placeholder="Nombre del nuevo archivo .txt" />
<input type="submit" name="creafichero" value="Crea un nuevo archivo con sus permisos y sus cosillas jeje"/>
</form>
';
        } elseif ($_SESSION["rol"] == "client") {
            if (isset($_POST["ruta"])) {
                $current_url = $_SERVER['REQUEST_URI'];
                echo "<p>Estás en: </p>" . $current_url;
            }

            if (isset($_POST["buscarfichero"])) {
                $rutaDirectorio = "";
                $nombreArchivoBuscado = $_POST["nombreArchivo"];

                echo "Archivos encontrados en la ruta $rutaDirectorio que coinciden con '$nombreArchivoBuscado':<br>";

                $archivos = scandir($rutaDirectorio);

                foreach ($archivos as $archivo) {
                    if (strpos($archivo, $nombreArchivoBuscado) !== false) {
                        echo $archivo . "<br>";
                    }
                }
            }

            echo '
<form method="post">
<br>
<input type="submit" name="ruta" value="Obten la url de la pagina actual"/>
<br>
<br>
<input type="text" name="creafichero" placeholder="Nombre del archivo" />
<input type="submit" name="buscarfichero" value="Buscar Archivo" />
</form>
';
        } else {
            echo " Usuario no reconocido ";
        }
    }
    ?>
</body>

</html>