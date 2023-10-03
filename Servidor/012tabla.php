/*012formulario.html y 012tabla.php: A partir de un número de filas y
columnas, crear una tabla con ese tamaño. Las celdas deben estar
rellenadas con los valores de las coordenadas de cada celda.*/


<!DOCTYPE html>
<html>
<head>
    <title>Tabla Generada</title>
</head>
<body>
    <h1>Tabla Generada</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filas = intval($_POST["filas"]);
        $columnas = intval($_POST["columnas"]);

        if ($filas > 0 && $columnas > 0) {
            echo "<table border='1'>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    echo "<td>($i, $j)</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Por favor, ingrese valores válidos para filas y columnas (números mayores que 0).</p>";
        }
    } else {
        echo "<p>Complete el formulario para generar la tabla.</p>";
    }
    ?>

    <p><a href="012formulario.html">Volver al formulario</a></p>
</body>
</html>









