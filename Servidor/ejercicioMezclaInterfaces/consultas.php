


<?php 
include_once ("conexion.php");


/*$consulta1="";
$resultado = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "<table border='1'";
    echo "<tr><th>PAIS</th></tr>";
    if ($resultado){
        while($fila=mysqli_fetch_assoc($resultado)){
            echo "<tr><th>" . $fila['NOMBRE'] . $fila['DESPLAZAMIENTO'] .$fila['NRO_CANIONES'] ."</tr></tr>";
        }
    }


*/

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

$consulta3 = "SELECT NOMBRE_BATALLA
FROM (
  SELECT B.NOMBRE_BATALLA, CL.PAIS, COUNT(DISTINCT BC.NOMBRE_BARCO) AS num_barcos
  FROM BATALLAS B
  JOIN BARCO_CLASE BC ON B.NOMBRE_BATALLA = BC.NOMBRE_BARCO
  JOIN CLASES CL ON BC.CLASE = CL.CLASE
  GROUP BY B.NOMBRE_BATALLA, CL.PAIS
) AS BatallasPorPais
WHERE num_barcos >= 3;";
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
        echo '<td>' . $fila['Nombre Batalla'] . '</td>';
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

