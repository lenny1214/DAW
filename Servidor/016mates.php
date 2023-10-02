/*16.	016mates.php: Genera un array aleatorio de 33 elementos
 con números comprendidos entre el 0 y 100 y calcula:
 El mayor, el menor y la media.*/


<?php

$array=[];
for ($i=0; $i<33; $i++){
  $array[]  = rand(0,100);
}
$mayor=max($array);
$menor=min($array)
$media = array_sum($array) / count($array);

echo "Array aleatorio: " . implode(", ", $array) . "<br>"; /*Aquí implementamos los puntos para ir concatenando resultados*/
echo "El mayor número es: " . $mayor . "<br>";
echo "El menor número es: " . $menor . "<br>";
echo "La media es: " . $media . "<br>";






?>



























 