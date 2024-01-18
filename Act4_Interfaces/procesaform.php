<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];  
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];



    // Realizar cualquier procesamiento adicional aquí

    // Devolver una respuesta con el mensaje recibido
    echo "¡Mensaje recibido con éxito! Nombre: " . $nombre . ", Email: " . $email;

    // Redirige al index.html después de 2 segundos
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.html";
            }, 1000);
          </script>';
} else {
    // Devolver un mensaje de error si no se reciben datos
    echo "Error: No se recibieron datos del formulario.";
}
?>