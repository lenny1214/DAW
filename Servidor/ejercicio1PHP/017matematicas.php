/*
A√±ade las siguientes funciones:
digitos(int $num): int ‚ devuelve la cantidad de d√≠gitos de un n√∫mero.
digitoN(int $num, int $pos): int ‚ devuelve el digito que ocupa, empezando
por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int ‚ le quita por detrás (derecha)
$cant digitos.
quitaPorDelante(int $num, int $cant): int ‚le quita por delante (izquierda)
$cant digitos.
Para probar las funciones, haz uso tanto de paso de argumentos
posicionales como argumentos con nombre.



<?php

    function digitos(int $num):int{
        return strlen ((String)num);
    }

    function digitoN(int $num, int $pos): int{
        $num_str=(String) $num;
    
    if ($pos >=0 && $pos < strlen($num_str)){
        $digito = (int) $num_str [$pos];
        return $digito;
    }else{
        echo "Error";
         
    }
    
    }

    function quitaPorDetras(int $num, int $cant): int {
        $numStr = (string) $num;
    
        if ($cant >= 0) {
            $numStr = substr($numStr, 0, -$cant);
            return (int) $numStr;
        } else {
            return -1;
        }
    }
    
    // Función para quitar dígitos por delante (izquierda)
    function quitaPorDelante(int $num, int $cant): int {
        $numStr = (string) $num;
    
        if ($cant >= 0) {
            $numStr = substr($numStr, $cant);
            return (int) $numStr;
        } else {
            return -1;
        }
    }
    
 
    $num = 12345;
    $cant = 2;
    
    echo "Número de dígitos en $num: " . digitos($num) . "<br>";
    echo "Dígito en la posición $cant de $num: " . digitoN($num, $cant) . "<br>";
    echo "Quitar $cant dígitos por detrás de $num: " . quitaPorDetras($num, $cant) . "<br>";
    echo "Quitar $cant dígitos por delante de $num: " . quitaPorDelante($num, $cant) . "<br>";
   

?>



*/