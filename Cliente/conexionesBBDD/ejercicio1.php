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
    $consulta = "SELECT *
    FROM persona
    WHERE tipo = 'alumno'
    AND fecha_nacimiento = (SELECT MAX(fecha_nacimiento) FROM persona WHERE tipo = 'alumno')";
    

    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    // Motrar el resultado de los registro de la base de datos
    // Encabezado de la tabla
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>nombre</th>";
    echo "<th>fecha_nacimiento</th>";
    echo "</tr>";
    
    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($columna = mysqli_fetch_array( $resultado ))
    {
        echo "<tr>";
        echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['fecha_nacimiento'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>"; // Fin de la tabla

    // cerrar conexión de base de datos
    //mysqli_close( $conexion );?>
</body>
</html>
