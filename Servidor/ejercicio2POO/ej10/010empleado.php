/*010PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las
clases Persona y Empleado, de forma similar a los realizados en HTML, pero sin que
sean estáticos, de manera que obtenga los datos mediante $this.
function public __toString(): string*/ 



<?php

class Empleado extends Persona{
  
    private array $telefonos = [];

    private static float $sueldoTope = 3333;


    public function __construct(
      protected  string $nombre="", 
      protected string $apellidos="",  
      protected float $sueldo=1000, 
      protected  bool $impuestos=true){

    }

    parent ::__construct($nombre, $apellidos); //Va a heredar el constructor de la clase padre, el cual solo tiene nombre y apellidos.

    public function getNombre(){
        return $this->nombre;
    }

 

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getNombreCompleto():string{
        return $this->nombre.' '.$this->apellidos;
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

    public function anyadirTelefono(int $telefono) : void {
        $this->telefonos[] = $telefono;
    }


        public function listarTelefonos(): string {
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public static function toHtml(Persona $per): string {
        if(instanceof Empleado){
    
        $html = "<p>Nombre: ". $per->getNombreCompleto(). "</p>";
        $html.= "<p>Sueldo: ". $per->getSueldoTope(). "</p>";
        $html.= ($per->debePagarImpuestos())?  "no debe pagar impuestos: ": "Debe pagar impuestos";
        $html.= "<p>Teléfonos: ". $per->listarTelefonos(). "</p>";
        }
        return $html;
    }


}

    $empleado = new Empleado('Lenny', 'Fernández Vigil-Escalera');
    echo "nombre completo: ". $empleado->getNombreCompleto(). "<br>";
    echo "sueldo". $empleado->getSueldoTope(). "<br>";
    echo ($empleado->debePagarImpuestos())?  "no debe pagar impuestos: ": "Debe pagar impuestos";

    $empleado->anyadirTelefono(123456789);
    $empleado->anyadirTelefono(987654321);
    echo "Teléfonos: ". $empleado->listarTelefonos(). "<br>";

    $empleado->vaciarTelefonos();
    echo "teléfonos vacíos: ". $empleado->listarTelefonos(). "<br>";

    
    echo $empleado->toHtml($empleado). "<br>";
















