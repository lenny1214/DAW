/*009PersonaE.php: Copia las clases del ejercicio anterior y modifícalas.
Añade en Persona un atributo edad
A la hora de saber si un empleado debe pagar impuestos, lo hará siempre y cuando
tenga más de 21 años y dependa del valor de su sueldo. Modifica todo el código
necesario para mostrar y/o editar la edad cuando sea necesario.*/ 



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

       return $this->sueldo < self::$sueldoTope;

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
















