/*020cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.*/

<?php
function cadenaCani($cadena){
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        if ($mayuscula) {
            $resultado .= strtoupper($caracter);
        } else {
            $resultado .= strtolower($caracter);
        }

        // Alternar entre mayúscula y minúscula para el siguiente carácter
        $mayuscula = !$mayuscula;
    }

    return $resultado;
}










?>



