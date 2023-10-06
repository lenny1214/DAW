/*008Investiga para qué sirve la instrucción match(), disponible desde PHP8
(https://www.php.net/manual/es/control-structures.match.php). Explica
con un par de l√≠neas su propósito y mediante código demuestra su uso.*/


<br>
<br>
<br>

<?php
$opcion = "b"; //En este caso hemos seleccionado la opción B. $opcion se compara con los valores a,b,c, y al tener le valos b es el que muestra.

$resultado = match ($opcion) {
    "a" => "Opción A seleccionada",
    "b" => "Opción B seleccionada",
    "c" => "Opción C seleccionada",
    default => "Opción no válida",
};

echo $resultado; 


?>









