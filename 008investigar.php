/*008Investiga para qué sirve la instrucción match(), disponible desde PHP8
(https://www.php.net/manual/es/control-structures.match.php). Explica
con un par de l√≠neas su propósito y mediante código demuestra su uso.*/


<?php
$opcion = "b";

$resultado = match ($opcion) {
    "a" => "Opción A seleccionada",
    "b" => "Opción B seleccionada",
    "c" => "Opción C seleccionada",
    default => "Opción no válida",
};

echo $resultado; // Imprime "Opción B seleccionada"


?>









