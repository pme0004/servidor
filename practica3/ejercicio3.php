<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <!--EJERCICIO 1-->
    <h3>EJERCICIO 1</h3>
    <form action="ejercicio3.php" method="POST">
        <label for="precios">Indica el importe de tu cesta </label>
        <input type="text" id="precios" name="precios">
        <input type="submit" value="Calcular" class="boton">
    </form>
    <?php
    if (isset($_POST["precios"])) { //comprueba si se ha enviado el formulario precios


        $precio = $_POST["precios"]; //obtiene el valor del campo precios enviado por formulario

        if ($precio <= 0) {
            echo "Precio no valido";
        } else if ($precio < 50) {
            echo "Los gastos de envío serán de 3,95€";
        } else if ($precio >= 50 && $precio < 75) {
            echo "Los gastos de envío serán de 2,95€";
        } else if ($precio >= 75 && $precio < 100) {
            echo "Los gastos de envío serán de 1,95€";
        } else if ($precio >= 100) {
            echo "Los gastos de envío serán gratuitos :)";
        }
    }
    //Dependiendo del rango de precio el condicional if muestra los gastos de envio
    ?>
    <!--EJERCICIO 2-->
    <h3>EJERCICIO 2</h3>
    <form action="ejercicio3.php" method="POST">
        <label for="precios2">Indica el importe de tu cesta </label>
        <input type="text" id="precios2" name="precios2">
        <input type="submit" value="Calcular" class="boton">
    </form>
    <?php

    if (isset($_POST["precios2"])) { //comprueba si se ha enviado el formulario precios2
        $precio = $_POST["precios2"];  //obtiene el valor del campo precios2 enviado por formulario

        switch ($precio) {
            case $precio <= 0:
                echo "Precio no valio";
                break;
            case $precio < 50:
                echo "Los gastos de envío serán de 3,95€";
                break;
            case $precio > 50 && $precio < 75:
                echo "Los gastos de envío serán de 2,95€";
                break;
            case $precio > 75 && $precio < 100:
                echo "Los gastos de envío serán de 1,95€";
                break;
            case $precio > 100:
                echo "Los gastos de envío serán gratuitos :)";
                break;
            default:
                echo "";
        }
    }//el switch determina en que caso estamos, y dependiendo del valor imprime lo que corresponde

    ?>
    <!--EJERCICIO 3-->
    <h3>EJERCICIO 3</h3>
    <form action="ejercicio3.php" method="post">
        <label for="calculadora">Introduce un número en cada campo, abajo se mostrará el mayor: </label>
        <div>
            <input type="text" id="calculadora" name="calculadora[]"><br>
            <input type="text" id="calculadora" name="calculadora[]"><br>
            <input type="text" id="calculadora" name="calculadora[]"><br>
            <input type="text" id="calculadora" name="calculadora[]"><br>
            <input type="text" id="calculadora" name="calculadora[]"><br>
            <input type="submit" value="Calcular" class="boton">
        </div>
    </form>
    <?php

    if (isset($_POST["calculadora"])) { //comprueba si se ha enviado el formulario calculadora
        $valorMinimo = ($_POST['calculadora']);//obtiene el valor del campo calculadora enviado por formulario

        $mayor = $valorMinimo[0];

        for ($x = 0; $x < 5; $x++) { //le indicamos que recorra el array
            if ($valorMinimo[$x] > $mayor) { //compara el valor con el mayor que ha encontrdo hasta el momento
                $mayor = $valorMinimo[$x]; //si es mayor, lo sustiye y lo mete en la variable mayor
            }
        }
        echo "El número mas grande que has introducido es " . $mayor;
    }
    ?>
    <!--EJERCICIO 4-->
    <h3>EJERCICIO 4</h3>
    <form action="ejercicio3.php" method="post">
        <label for="matriz4">Pulsa el botón para mostar una matriz</label>
        <input type="submit" value="Mostar" name="matriz4" class="boton">
    </form>

    <?php
    if (isset($_POST["matriz4"])) {//comprueba si se ha enviado el formulario matriz4

        $matriz = array(
            array(3, 1),
            array(2, 0),
        );

        foreach ($matriz as $fila) { 
            foreach ($fila as $elemento) {
                echo "$elemento" . " ";
            }
            echo "<br>";
        }//se recorre la matriz y muestra cada elemento
    }

    ?>
    <!--EJERCICIO 5-->
    <h3>EJERCICIO 5</h3>
    <form action="ejercicio3.php" method="post">
        <label for="sumarmatriz">Pulsa para ejecutar la siguiente suma de estas matrices: <img src="matriz.png"></label>
        <input type="submit" value="Calcular" name="sumarmatriz" class="boton">
    </form>

    <?php
    if (isset($_POST["sumarmatriz"])) {//comprueba si se ha enviado el formulario sumarmatriz
        $matriz1 = array( //se define la matriz 1
            array(1, 0),
            array(0, 1),
        );

        $matriz2 = array(//se define la matriz 2
            array(0, 1),
            array(1, 0),
        );

        $resultado = array(//se define la matriz resultado
            array(0, 0),
            array(0, 0)
        );

        //bucle para sumar las matricees
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
            }
        }

        //se imprime la matriz 1
        echo "Matriz 1:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriz1[$i][$j];
            }
            echo "<br>";
        }

        //se imprime la matriz 2
        echo "Matriz 2:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriz2[$i][$j] . " ";
            }
            echo "<br>";
        }

        //se imprime la matriz resultado
        echo "Resultado de la suma:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $resultado[$i][$j] . " ";
            }
            echo "<br>";
        }
    }


    ?>
</body>

</html>
