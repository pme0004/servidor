<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>

<body>
    <?php
    echo "<h1>Practica 2</h1>";
    echo "<br>";

    //EJERCICIO 1
    echo "<h2>1</h2>";
    $var1 = "hola";
    $var2 = "mundo";
    echo $resultado = $var1 . " " . $var2;
    echo "<br>";
    $var3 = true;
    echo $var3;
    echo "<br>";
    $var4 = 3.14;
    echo $var4;
    echo "<br>";
    $var5 = ["valor1" => 1, "valor2" => 2, "valor3" => 3];
    print_r($var5);
    echo "<hr>";

    //EJERCICIO 2
    echo "<h2>2</h2>";
    $var3 = false;
    echo $var3; //no se imprime nada ya que es false
    echo "<hr>";

    //EJERCICIO 3
    echo "<h2>3</h2>";
    $resultado_sinespacios = str_replace(" ", "", $resultado); //str_replace sustituye los caracteres que indiques de la variable que indiques
    //en este caso los espacios por "nada"
    echo $resultado_sinespacios;
    echo "<hr>";

    //EJERCICIO 4
    echo "<h2>4</h2>";
    $mensaje = "<p>El operador “+” sirve para sumar el valor de variables. Con la “/”podemos 
       dividir valores entre variables. El símbolo del dólar “\$” indica que estamos 
       utilizando variables pero no lo usaremos en las constantes o globales</p>"; //poniendo \$ se puede imprimir el simbolo del dolar, que de normal es un carácter reservado
    echo $mensaje;
    echo "<hr>";

    //EJERCICIO 5
    echo "<h2>5</h2>";
    echo $longitud = strlen($mensaje); //strlen muestra el numero ed caracteres que hay en la varible
    echo "<hr>";

    //EJERCICIO 6
    echo "<h2>6</h2>";
    $vocales = [
        "1" => "a",
        "2" => "e",
        "3" => "i",
        "4" => "o",
        "5" => "u",
    ];
    $palabra = "Hello World";
    $palabra_sinvocales = str_replace($vocales, "", $palabra); //se indican las vocales en un array y str_replace las sustituye por "nada",
    // dejando el string sin las letras que se han indicado
    echo $palabra_sinvocales;
    echo "<hr>";

    //EJERCICIO 7
    echo "<h2>7</h2>";
    $vacio;
    echo $vacio;
    $esta_vacia = empty($vacio); //sale un warning cuando se procesa el php, indica que la variable no está definida
    echo "<hr>";

    //EJERCICIO 8
    echo "<h2>8</h2>";
    intval($palabra);
    echo $palabra; //no se puede convertir a entero y se muestra como string
    echo "<hr>";

    //EJERCICIO 9
    echo "<h2>9</h2>";
    echo "<h3>Apartado A</h3>";
    $numero = 144;
    $resultadoraiz = sqrt($numero);// se calcula la raiz cuadrada del nuemero dado
    echo "<p>La raiz cuadrada de $numero es $resultadoraiz </p>";

    echo "<h3>Apartado B</h3>";
    $potencia = pow(2, 8);//la funcion pow calcula la potencia, el primer numero dado es la base y ell segundo el exponente
    echo "<p>Potencia de 2 elevado a 8 es: $potencia</p>";

    echo "<h3>Apartado C</h3>";
    $modulo = (100 % 6);//el operador % calcula el modulo
    echo "<p>El resto de 100 entre 6 es: $modulo</p>";

    echo "<h3>Apartado D</h3>";
    function mcd($numero1, $numero2)//se crea la funcion mcd que recive dos variables
    {
        if ($numero1 == 0) {
            return $numero2;
        }
        return mcd($numero2 % $numero1, $numero1);
    }
    echo "<p>MCD de 3 y 6 es</p>" . mcd(3, 6);
    ?>
</body>

</html>