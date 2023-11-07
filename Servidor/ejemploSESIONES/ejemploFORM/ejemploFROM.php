<!--Realzar un formulario en el que tenemos que guardar la sesión, mandar un mensaje que diga que se ha logueado, si no se ha logueado correctamente, decírselo
-->

<?php
// Definir el usuario y contraseña correctos
$usuario_correcto = "lenny";
$contrasena_correcta = "1234";

// Iniciar sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_ingresado = $_POST["nombre"];
    $contrasena_ingresada = $_POST["contrasena"];

    if ($usuario_ingresado === $usuario_correcto && $contrasena_ingresada === $contrasena_correcta) {
        // Las credenciales son correctas, guardar en la sesión
        $_SESSION["usuario"] = $usuario_ingresado;
        header("Location: verificacion.php");
        exit();
    } else {
        $mensaje = "Usuario o contraseña incorrectos. Intenta de nuevo.";
    }
} else {
    $mensaje = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="" method="post">
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Contraseña: <input type="password" name="contrasena" required></p>
        <p><input type="submit" value="Iniciar Sesión"></p>
    </form>
    <p><?php echo $mensaje; ?></p>
</body>
</html>

