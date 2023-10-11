/*012Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.
Cambia la estructura de clases conforme al gráfico respetando todos los métodos que
ya están hechos. Trabajador es una clase abstracta que ahora almacena los teléfonos y
donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por
hora. Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad:
salario + salario*edad/100*/

<?php

class Trabajador extends Persona{
private static float $sueldoTope = 3333;

public function __construct(
    private array $telefonos = [];
    ){

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




















