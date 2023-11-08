<?php

/*Igual que el ejemplo visto en los apuntes, muestra los valores de 
$_SERVER al ejecutar
un script en tu ordenador.
- Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
- Prepara un formulario (001post.html) que haga un envío por POST y
compruébalo de nuevo.
- Crea una página (001enlace.html) que tenga un enlace a 001server.php y
comprueba el valor de HTTP_REFERER.*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Script PHP</title>
</head>
<body>
    <h2>Valores de $_SERVER:</h2>
    <pre>
    <?php
    print_r($_SERVER);
    ?>
    </pre>

    <h2>Valor de HTTP_REFERER:</h2>
    <?php
    $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No se encontró HTTP_REFERER';
    echo $httpReferer;
    ?>

    <h2>Valores enviados por POST:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
        $edad = isset($_POST["edad"]) ? $_POST["edad"] : "";

        echo "Nombre: " . $nombre . "<br>";
        echo "Edad: " . $edad;
    }
    ?>
</body>
</html>






