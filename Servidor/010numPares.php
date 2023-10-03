/*010numPares.php: A partir del anterior, refactorizar para que funcione con
inicio y fin*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NumreosPares</title>
</head>
<body>
     <h2>Números Pares entre Inicio y Fin</h2>
    <form method="get" action="">
        Inicio: <input type="number" name="inicio">
        Fin: <input type="number" name="fin">
        <input type="submit" value="Mostrar">
    </form>
    <ul>
        <?php
            //El isset lo empleamos para verificar que la variable de la que hablamos tiene valor, para que sea true y podamos trabajar con el varlo, y en caso de estar vacía no.
            if (isset($_GET['inicio']) && isset($_GET['fin'])) {
                $inicio=intval($_GET['inicio']);
                $fin=intval($_GET['fin']);
            }
            //Si no se ha seleccionado ningún valor, se le asigna el valor por def
            if($inicio<=$fin){
                for ($i = $inicio; $i <= $fin; $i++) {
                    if ($i % 2 == 0) {
                        echo "<br>$i<br>";
                    }
                }
            } else {
                echo "<li>El valor de inicio debe ser menor o igual al valor de fin.</li>";
            }
        




        ?>
    </ul> 
</body>
</html>



