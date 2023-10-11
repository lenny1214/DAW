<?php

class Empleado extends Trabajador{
  
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
    public function __toString(): string {
        $html = "<p>Nombre completo: " . $this->getNombreCompleto() . "</p>";
        $html .= "<p>Sueldo: " . $this->getSueldoTope() . "</p>";
        $html .= "<p>Debe pagar impuestos: " . $this->debePagarImpuestos() . "</p>";
        $html .= "<p>Teléfonos: " . $this->listarTelefonos() . "</p>";
        return $html;
    }


}

$persona = new Persona('Lenny', 'Fernández Vigil-Escalera', 25);
$empleado = new Empleado('Juan', 'López', 3000, true);

echo "Información detallada de la Persona: <br>";
echo $persona->__toString() . "<br>";

echo "Información detallada del Empleado: <br>";
echo $empleado->__toString() . "<br>";














