/*022generaPass.php: Crea una función que, a partir de un tamaño, genere
una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.*/

<?php



function generarCA($longitud){


$caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longitudCaracteres = strlen($caracteres);
$contraseña = '';

for ($i = 0; $i < $longitud; $i++) {
    // Obtener un carácter aleatorio de la cadena de caracteres permitidos
    $caracterAleatorio = $caracteres[rand(0, $longitudCaracteres - 1)];

    // Agregar el carácter aleatorio a la contraseña
    $contraseña .= $caracterAleatorio;
}

return $contraseña;
}
$contraseñaGenerada = generarContraseñaAleatoria(10);
echo $contraseñaGenerada;


?>