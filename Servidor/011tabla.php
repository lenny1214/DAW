<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <?
    // Verificar si se ha proporcionado un número en la URL
    if (isset($_GET['numero'])) {
        // Obtener el número de la URL y asegurarse de que sea un número entero
        $numero = intval($_GET['numero']);

        // Comprobar si el número es válido (mayor que 0)
        if ($numero > 0) {
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table border='1'>";
            echo "<thead><tr><th>Multiplicando</th><th>Resultado</th></tr></thead>";
            echo "<tbody>";

            // Generar la tabla de multiplicar
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>Por favor, introduzca un número válido (mayor que 0).</p>";
        }
    } else {
        echo "<p>Por favor, proporcione un número en la URL.</p>";
    }
    ?>
</body>
</html>
