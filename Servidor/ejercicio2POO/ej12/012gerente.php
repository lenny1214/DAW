<?php

public class Gerente extends Trabajador{


    public function __construct(
       public string $sueldo=5000 ){
  
      }

      public static function getSueldoTope (): float {

        return self::$sueldoTope;
    }

    public static function setSueldoTope($sueldoTope):void {
        self::$sueldoTope=$sueldoTope;
    }


   
    public function debePagarImpuestos(): bool {
        if (parent:: getEdad() >= 21 && $this->getSueldo() >= self::$sueldoTope) {
       return "Tienes que pagar impuesto";
    }else{
        return "No tienes que pagar impuesto";
    }
    }




















}





?>