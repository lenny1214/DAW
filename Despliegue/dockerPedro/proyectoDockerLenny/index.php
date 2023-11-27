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
  <link rel="stylesheet" href="../css/style.css">


</head>

<body>
  <header>
  <nav>
    <a href="#inicio">Inicio</a>
    <a href="#ingreso-gasto">Ingreso/Gasto</a>
    <a href="#ver-saldo">Ver Saldo</a>
    <a href="#prestamo">Préstamo</a>
    <a href="#chat">Chat</a>
</nav> 
 </header>
  <main>
  <div style="padding: 16px;">
    <!-- Tu contenido aquí -->
    <h2>Bienvenido a tu banca online de confianza</h2>
    <p>Contenido de la página...</p>
</div>  
<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre_usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <h2>Bienvenido, <?php echo $_SESSION['nombre_usuario']; ?>!</h2>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>

</html>
  </main>
  <footer>
  </footer>

</body>

</html>