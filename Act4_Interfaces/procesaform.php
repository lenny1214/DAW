<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Realizar cualquier procesamiento adicional aquí

    // Devolver una respuesta con el mensaje recibido
    echo "¡Mensaje recibido con éxito! Nombre: " . $nombre . ", Email: " . $email;
} else {
    // Devolver un mensaje de error si no se reciben datos
    echo "Error: No se recibieron datos del formulario.";
}
?>
