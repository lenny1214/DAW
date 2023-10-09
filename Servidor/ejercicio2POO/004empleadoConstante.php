/*004EmpleadoConstante.php: Copia la clase del ejercicio anterior y modifícala. Añade
una constante SUELDO_TOPE con el valor del sueldo que debe pagar impuestos, y
modifica el código para utilizar la constante.*/

<?php

class Empleado {
  
    private array $telefonos = [];

    const SUELDO_TOPE=3333;


    public function __construct(
      protected  string $nombre="", 
      protected string $apellidos="",  
      protected float $sueldo=1000, 
      protected  bool $impuestos=false){

    }

    public function getNombre(){
        return $this->nombre;
    }

 

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getNombreCompleto():string{
        return $this->nombre.' '.$this->apellidos;
    }

  


    public function getSueldo (): float {

        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }


   
    public function debePagarImpuestos(): bool {

       return $this->sueldo < self::SUELDO_TOPE;

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


}

    $empleado = new Empleado('Lenny', 'Fernández Vigil-Escalera');
    echo "nombre completo: ". $empleado->getNombreCompleto(). "<br>";
    echo "sueldo". $empleado->getSueldo(). "<br>";
    echo ($empleado->debePagarImpuestos())?  "no debe pagar impuestos: ": "Debe pagar impuestos";

    $empleado->anyadirTelefono(123456789);
    $empleado->anyadirTelefono(987654321);
    echo "Teléfonos: ". $empleado->listarTelefonos(). "<br>";

    $empleado->vaciarTelefonos();
    echo "teléfonos vacíos: ". $empleado->listarTelefonos(). "<br>";



