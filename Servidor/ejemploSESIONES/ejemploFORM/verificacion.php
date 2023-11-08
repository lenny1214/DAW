<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    header('Location: ejemploFORM.php');
    exit();
}

// Si el usuario ha iniciado sesión, mostrar el contenido protegido
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Este es el contenido protegido.</p>
    <a href="ejemploFROM.php">Cerrar Sesión</a>
</body>
</html>
