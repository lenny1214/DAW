


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

    $consulta2= "SELECT DISTINCT PAIS FROM CLASES WHERE TIPO='ACORAZADO' AND PAIS IN(SELECT PAIS FROM CLASES WHERE TIPO='CRUCERO')";
	$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
    function mostrarC2 ($resultado2){
    echo "<table border='1'";
    echo "<tr>";
    echo "<th>PAIS</th>";
    echo "</tr>";
    
    
        while($fila=mysqli_fetch_assoc($resultado2)){
            echo "<tr>";
            echo "<th>" . $fila['País'] . "</th>";
            echo "</tr>";
        
    }

}
echo "</table>";


//ESTO SE SUPONE QUE VA A SER LA CONSULTA 3


$consulta3= "SELECT NOMBRE_BATALLA FROM (SELECT B.NOMBRE_BATALLA,CL.PAIS, COUNT(DISTINCT BC.NOMBRE_BARCO)AS num_barcos
FROM BATALLAS B
JOIN BARCOS_CLASES BC ON B.NOMBRE=BC.NOMBRE_BARCO
JOIN CLASES CL ON BC.CLASE
GROUP BY B.NOMBRE_BATALLA, CL.PAIS)AS BatallasPorPais
WHERE num_barcos >=3 ";

$resultado3 = mysqli_query( $conexion, $consulta3 ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    function mostrarC3($resultado3){
	echo "<table border='1'";
    echo "<tr>";
    echo "<th>Nombre Batalla</th>";
    echo "</tr>";
    
        while($fila=mysqli_fetch_assoc($resultado3)){
            echo "<tr><th>" . $fila['Nombre Batalla'] . "</tr></tr>";
        
    }
}
echo "</table>";



$consulta4="SELECT PaisesConMaxCaniones.PAIS FROM (SELECT PAIS MAX(NRO_CANIONES) AS max_caniones
FROM CLASES
GROUP BY PAIS)AS PaisesConMaxCaniones
JOIN CLASES ON PaisesConMaxCanCaniones.PAIS AND PaisesConMaxCaniones.max_caniones=CLASES";

$resultado4=mysqli_query( $conexion, $consulta4) or die ("No funciona la conexión a la consulta");

function mostrarC4($resultado4){
    echo "<table border='1'";
    echo "<tr>";
    echo "<th>Países con mayor número de camiones</th>";
    echo "</tr>";

    while($fila=mysqli_fetch_assoc($resultado4)){
        echo "<tr><th>" . $fila['Nombre Batalla'] . "</tr></tr>";
    
}

}

echo "</table>";

$consulta5="";
  
    
