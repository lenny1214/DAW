


<?php 
include_once ("conexion.php");

$consulta1="SELECT BC.NOMBRE_BARCO, CL.DESPLAZAMIENTO, CL.NRO_CANIONES
FROM BARCO_CLASE AS BC
INNER JOIN RESULTADOS AS R ON BC.NOMBRE_BARCO = R.NOMBRE_BARCO
INNER JOIN BATALLAS AS B ON R.NOMBRE_BATALLA = B.NOMBRE_BATALLA
INNER JOIN CLASES AS CL ON BC.CLASE = CL.CLASE
WHERE B.NOMBRE_BATALLA = 'Guadalcanal';
";
$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
    function mostrarC1( $resultado1){
    echo "<table border='1'";
    echo "<tr><th>PAIS</th></tr>";
  
        while($fila=mysqli_fetch_assoc($resultado1)){
            echo "<tr><th>" . $fila['NOMBRE'] . $fila['DESPLAZAMIENTO'] .$fila['NRO_CANIONES'] ."</tr></tr>";
        
    }

}

echo "/table>";


$consulta2 = "SELECT DISTINCT PAIS FROM CLASES WHERE TIPO = 'ACORAZADO' AND PAIS IN (SELECT PAIS FROM CLASES WHERE TIPO = 'CRUCERO')";
$resultado2 = mysqli_query($conexion, $consulta2) or die("Algo ha ido mal en la consulta a la base de datos");

function mostrarC2($resultado2)
{
    echo '<div style="text-align: center;">';
    echo '<table border="1" style="margin: 0 auto;">';
    echo '<tr>';
    echo '<th>País</th>';
    echo '</tr>';

    while ($fila = mysqli_fetch_assoc($resultado2)) {
        echo '<tr>';
        echo '<td>' . $fila['PAIS'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
}

$consulta3 = "SELECT B1.PAIS, B2.NOMBRE_BATALLA
FROM (
    SELECT R.NOMBRE_BARCO, C.PAIS, R.NOMBRE_BATALLA
    FROM RESULTADOS R
    INNER JOIN BARCO_CLASE BC ON R.NOMBRE_BARCO = BC.NOMBRE_BARCO
    INNER JOIN CLASES C ON BC.CLASE = C.CLASE
) B1
INNER JOIN (
    SELECT C.PAIS, R.NOMBRE_BATALLA, COUNT(*) AS NUM_BARCOS
    FROM RESULTADOS R
    INNER JOIN BARCO_CLASE BC ON R.NOMBRE_BARCO = BC.NOMBRE_BARCO
    INNER JOIN CLASES C ON BC.CLASE = C.CLASE
    GROUP BY C.PAIS, R.NOMBRE_BATALLA
    HAVING COUNT(*) >= 3
) B2
ON B1.PAIS = B2.PAIS AND B1.NOMBRE_BATALLA = B2.NOMBRE_BATALLA;";

$resultado3 = mysqli_query($conexion, $consulta3) or die("Algo ha ido mal en la consulta a la base de datos");

function mostrarC3($resultado3)
{
    echo '<div style="text-align: center;">';
    echo '<table border="1" style="margin: 0 auto;">';
    echo '<tr>';
    echo '<th>Nombre Batalla</th>';
    echo '</tr>';

    while ($fila = mysqli_fetch_assoc($resultado3)) {
        echo '<tr>';
        echo '<td>' . $fila['NOMBRE_BATALLA'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
}

$consulta4 = "SELECT PAIS, NRO_CANIONES
FROM CLASES
WHERE NRO_CANIONES = (SELECT MAX(NRO_CANIONES) FROM CLASES)";
$resultado4 = mysqli_query($conexion, $consulta4) or die("No funciona la conexión a la consulta");

function mostrarC4($resultado4)
{
    echo '<div style="text-align: center;">';
    echo '<table border="1" style="margin: 0 auto;">';
    echo '<tr>';
    echo '<th>País</th>';
    echo '<th>Número de Cañones</th>';
    echo '</tr>';

    while ($fila = mysqli_fetch_assoc($resultado4)) {
        echo '<tr>';
        echo '<td>' . $fila['PAIS'] . '</td>';
        echo '<td>' . $fila['NRO_CANIONES'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
}

$consulta5 = "SELECT DISTINCT R.NOMBRE_BATALLA
FROM RESULTADOS R
JOIN BARCO_CLASE BC ON R.NOMBRE_BARCO = BC.NOMBRE_BARCO
JOIN CLASES C ON BC.CLASE = C.CLASE
WHERE C.CLASE = 'KONGO';
";
$resultado5 = mysqli_query($conexion, $consulta5) or die("No funciona la conexión a la consulta");

function mostrarC5($resultado5)
{
    echo '<div style="text-align: center;">';
    echo '<table border="1" style="margin: 0 auto;">';
    echo '<tr>';
    echo '<th>NOMBRE_BATALLA</th>';
    echo '</tr>';

    while ($fila = mysqli_fetch_assoc($resultado5)) {
        echo '<tr>';
        echo '<td>' . $fila['NOMBRE_BATALLA'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
}