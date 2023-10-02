/*021investiga.php: Investiga las siguientes funciones de cadena (explica para
qué sirven mediante comentarios, y programa un pequeño ejemplo de cada
una de ellas): ucwords, strrev, str_repeat y md5.*/

/*ucwords, lo utilizamos para convertir la primera letra de cada palabra en una 
mayúscula (Las iniciales de cada palabra en mayúscula) y todas las demás letras 
devuelve en minúsculas.

<?php


/*ucwords, lo utilizamos para convertir la primera letra de cada palabra en una 
mayúscula (Las iniciales de cada palabra en mayúscula) y todas las demás letras 
devuelve en minúsculas.*/

$cadena = "hola, mundo";
$cadenaConMayusculas = ucwords($cadena);

echo $cadenaConMayusculas;





/*strrev, lo utilizamos para revertir el orden de los caracteres en una cadena
toma una cadena como entrada y devuelve una cadena con el orden inverso  */

$cadena = "Hola, mundo!";
$cadenaRevertida = strrev($cadena);

echo $cadenaRevertida; // Salida: "!odnum ,aloH"


/*str_repeat, Se utiliza para repetir una cadena un número especificado de veces
y devuelve otra cadena repetida en las veces ordenadas*/

str_repeat(string $cadena, int $repeticiones): string



/*md5.se utiliza para calcular el valor hash MD5 (Message Digest 5) 
de una cadena de texto. Un hash MD5 es una cadena de 32 caracteres 
hexadecimales que representa una versión resumida (hash) de la cadena original.
 */

 md5(string $cadena, bool $raw_output = false): string|false


?>














