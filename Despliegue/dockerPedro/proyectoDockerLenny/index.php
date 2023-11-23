<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <?php


// Datos de conexión a la base de datos
$host = 'localhost'; // Puede ser 'localhost' si la base de datos está en el mismo servidor
$dbname = 'testdocker';
$username = 'root';
$password = '';


// Crear una conexión a la base de datos
$conn = new mysqli($host, $username, $password, $dbname);


// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


// Consulta SQL para crear la tabla 'persona'
$createTableQuery = "
    CREATE TABLE IF NOT EXISTS persona (
        Id int primary key not null,
        nombre varchar(100),
        apellido varchar(100)
    )
";


// Ejecutar la consulta para crear la tabla
if ($conn->query($createTableQuery) === TRUE) {
    echo "Tabla creada correctamente. ";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}


// Consulta SQL para seleccionar todos los datos de la tabla 'persona'
$selectDataQuery = "SELECT * FROM persona";


// Ejecutar la consulta y mostrar los resultados
$result = $conn->query($selectDataQuery);


if ($result->num_rows > 0) {
    echo "<br><br>Datos de la tabla 'persona':<br>";
    while ($row = $result->fetch_assoc()) {
        echo  " - Nombre: " . $row["nombre"] . " - Apellido: " . $row["apellido"] . "<br>";
    }
} else {
    echo "<br>No hay datos en la tabla 'persona'.";
}


// Cerrar la conexión
$conn->close();


/*
mysql:
  image: mysql:latest
  ports:
    - "3307:3306"
  environment:
    - MYSQL_ALLOW_EMPTY_PASSWORD=YES
    - MYSQL_ROOT_PASSWORD =""
    - MYSQL_DATABASE=testingdocker


*/


?>





  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  
</body>

</html>