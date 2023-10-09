/*003EmpleadoConstructor.php: Copia la clase del ejercicio anterior y modifícala.
Elimina los setters de nombre y apellidos, de manera que dichos datos se asignan
mediante el constructor (utiliza la sintaxis de PHP8). Si el constructor recibe un tercer
parámetro, será el sueldo del Empleado. Si no, se le asignará 1000€ como sueldo
inicial.*/



<?php

class Empleado {
  
    private array $telefonos = [];

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

        if ($this->sueldo < 3333) {
            return true;
            echo "NO pagas impuestos";
        }else{
            return false;
            echo "Pagas impuestos";
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


}

    $empleado = new Empleado('Lenny', 'Fernández Vigil-Escalera');
    echo "nombre completo: ". $empleado->getNombreCompleto(). "<br>";
    echo "sueldo". $empleado->getSueldo(). "<br>";
    if ($empleado->debePagarImpuestos() == true) {
        echo "no debe pagar impuestos: ". $empleado->debePagarImpuestos(). "<br>";

    }else{
        echo "debe pagar impuestos: ". $empleado->debePagarImpuestos(). "<br>";
    }

    $empleado->anyadirTelefono(123456789);
    $empleado->anyadirTelefono(987654321);
    echo "Teléfonos: ". $empleado->listarTelefonos(). "<br>";

    $empleado->vaciarTelefonos();
    echo "teléfonos vacíos: ". $empleado->listarTelefonos(). "<br>";






