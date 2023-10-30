<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barquitos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="#Inicio">Inicio</a></li>
            <li><a href="#Barcos">Barcos</a></li>
            <li><a href="#Contacto">Contacto</a></li>
            <li><a href="#Nosotros">Sobre nosotros</a></li>
        </ul>
    </nav>

    <div id="Inicio">
        <h1>Bienvenido a nuestra página de inicio</h1>
        <p>¡Aquí puedes encontrar información sobre nuestros barcos y servicios!</p>
        <img src="/Servidor/ejercicioMezclaInterfaces/img/imagen" alt="Descripción de la imagen">
    </div>

    <div id="Barcos">
    </div>

    <div id="Contacto">
    </div>

    <div id="Nosotros">
    </div>
    </header>



    <?php 
    echo '<p> HOLA </p>'; 
    // Ejemplo de conexión a base de datos MySQL con PHP.
	
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "bbdd_barcos";
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	
    $consulta= "SELECT DISTINCT PAIS FROM CLASES WHERE TIPO='ACORAZADO' AND PAIS IN(SELECT PAIS FROM CLASES WHERE TIPO='CRUCERO')";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "<table border='1'";
    echo "<tr><th>PAIS</th></tr>";
    if ($resultado){
        while($fila=mysqli_fetch_assoc($resultado)){
            echo "<tr><th>" . $fila['PAIS'] . "</tr></tr>";
        }
    }
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	/*echo "<table border='2'>";
	echo "<tr>";
	echo "<th>Tipo de Barco</th>";
	echo "<th>Desplazamiento</th>";
    echo "<th>Número de cañones</th>";

	echo "</tr>";*/
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['TIPO'] . "</td><td>" . $columna['NRO_CANIONES'] . "</td><td>" . $columna['NRO_CANIONES'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	//mysqli_close( $conexion );?>

    <h1>Tabla de Barcos</h1>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>Velero</td>
            <td>$20,000</td>
            <td>Gama Básica</td>
        </tr>
        <tr>
            <td>Lancha rápida</td>
            <td>$35,000</td>
            <td>Gama Intermedia</td>
        </tr>
        <tr>
            <td>Yate de lujo</td>
            <td>$150,000</td>
            <td>Gama de Lujo</td>
        </tr>
    </table>




</body>
</html>
