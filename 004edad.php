/*004edad.php: Sabiendo la edad de una persona, mostrar la edad que
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo
que trabajarás hasta los 67 años. En este caso, no hace falta que
previamente crees un formulario, puedes probar el ejercicio vía URL:
004edad.php?edad=33. Tip: $anyoActual = date(&quot;Y&quot;);*/


<br>
<br>
<br>

<?php

$edad_actual = 30;  

$anio_actual = date("Y");

$edad_en_10_anios = $edad_actual + 10;
$anio_en_10_anios = $anio_actual + 10;

$edad_hace_10_anios = $edad_actual - 10;
$anio_hace_10_anios = $anio_actual - 10;

$anio_jubilacion = $anio_actual + (67 - $edad_actual);

//Resultados
echo "Dentro de 10 años, la persona tendrá $edad_en_10_anios años y será el año $anio_en_10_anios.<br>";
echo "Hace 10 años, la persona tenía $edad_hace_10_anios años y era el año $anio_hace_10_anios.<br>";
echo "Suponiendo una jubilación a los 67 años, la persona se jubilará en el año $anio_jubilacion.";
?>
