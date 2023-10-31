


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

	$resultado = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "<table border='1'";
    echo "<tr><th>PAIS</th></tr>";
    if ($resultado){
        while($fila=mysqli_fetch_assoc($resultado)){
            echo "<tr><th>" . $fila['PAIS'] . "</tr></tr>";
        }
    }
	// Motrar el resultado de los registro de la base de datos
	
	

//ESTO SE SUPONE QUE VA A SER LA CONSULTA 3


$consulta3= "SELECT NOMBRE_BATALLA FROM (SELECT B.NOMBRE_BATALLA,CL.PAIS, COUNT(DISTINCT BC.NOMBRE_BARCO)AS num_barcos
FROM BATALLAS B
JOIN BARCOS_CLASES BC ON B.NOMBRE=BC.NOMBRE_BARCO
JOIN CLASES CL ON BC.CLASE
GROUP BY B.NOMBRE_BATALLA, CL.PAIS)AS BatallasPorPais
WHERE num_barcos >=3 ";

$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "<table border='1'";
    echo "<tr><th>Nombre Batalla</th></tr>";
    if ($resultado){
        while($fila=mysqli_fetch_assoc($resultado)){
            echo "<tr><th>" . $fila['Nombre Batalla'] . "</tr></tr>";
        }
    }



$consulta4="SELECT PaisesConMaxCaniones.PAIS FROM (SELECT PAIS MAX(NRO_CANIONES) AS max_caniones
FROM CLASES
GROUP BY PAIS)AS PaisesConMaxCaniones
JOIN CLASES ON PaisesConMaxCanCaniones.PAIS AND PaisesConMaxCaniones.max_caniones=CLASES";

$resultado=mysqli_query( $conexion, $consulta4) or die ("No funciona la conexión a la consulta");



$consulta5="";
  
    
