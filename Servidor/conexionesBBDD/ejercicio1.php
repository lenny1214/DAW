<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo '<p> HOLA </p>'; 
    // Ejemplo de conexión a base de datos MySQL con PHP.
    
    // Datos de la base de datos
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basededatos = "Profes";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    // establecer y realizar consulta. guardamos en variable.

    
   
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        echo "<tr>";
        echo "<td>" . $columna['id'] . "</td><td>" . $columna['nif'] . "</td><td>". $columna['nombre'] . "</td><td>" . $columna['apellido1'] . "</td><td>" .$columna['apellido2'] . "</td><td>" . $columna['ciudad'] . "</td><td>" . $columna['direccion'] . "</td><td>" . $columna['teléfono'] . "</td><td>" .$columna['fecha_nacimiento'] . "</td><td>" . $columna['sexo'] . "</td><td>" . $columna['tipo'] . "</td>" ;
        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla

    // cerrar conexión de base de datos
    //mysqli_close( $conexion );?>
</body>
</html>
