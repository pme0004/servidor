<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="comprobar.php" method="POST">
        la ruta actual es<input type="submit" name="ruta" value="Mostar"><br>
    
        buscar por fichero <input type="text" name="fichero"><input type="submit" name="buscarfichero" value=Buscar><br>
        crear un nuevo fichero <input type="text" name="nombrenuevofichero"><input type="submit" name="creafichero" value="Crear">
    </form>
    <!--He usado metodos post ya que son mas seguros-->
    <?php

    if(isset($_POST["enviar"])) {
        $user =$_POST["user"];
        $password=$_POST["password"];
        comprobar($user,$password);
    }

function comprobar($user,$password) {
    if($user=="admin") {
        if($password=="1234"){
            echo"<p>contraseña correcta</p>";
            echo $hora = date("H:i:s");
            echo "<br>";
            echo $fecha =date("d-m-Y");
            echo "<br>";
        }else{
            echo"<p>contraseña incorrecta</p>";
        }
}else{
    echo "<p>usuario incorrecto</p>"; 
}
}


if(isset($_POST["ruta"])){
    $urlactual = $_SERVER['REQUEST_URI'];
    echo "la ruta actual es ". $urlactual;
}


if(isset($_POST["buscarfichero"])){
    $rutaactual = "C:/xampp/htdocs/practica4login/";
    $nombrefichero = $_POST["fichero"];
    echo "archivos encontrados en la ruta " . $rutaactual . " con las palabras " . $nombrefichero . "<br>";
    $archivos = scandir($rutaactual);
    foreach($archivos as $archivo){
        if(strpos($archivo, $nombrefichero)!==false){
            echo $archivo;
    }
}
}
if(isset($_POST["creafichero"])){
    $nombrenuevofichero = $_POST["nombrenuevofichero"];
    $rutanuevoarchivo = "C:/xampp/htdocs/practica4login/";
    if(file_put_contents($rutanuevoarchivo, $nombrenuevofichero)!==false){
        chmod($rutanuevoarchivo, 0644);
        echo "Se ha creado el archivo ". $nombrenuevofichero;
    }else{
            echo "<p>no se ha podido crear</p>";
        }
}

?>
</body>
</html>