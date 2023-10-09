/*002EmpleadoTelefonos.php: Copia la clase del ejercicio anterior y modifícala. Añade
una propiedad privada que almacene un array de números de teléfonos. Añade los
siguientes métodos:
public function anyadirTelefono(int $telefono) : void → Añade un teléfono al array
public function listarTelefonos(): string → Muestra los teléfonos separados por comas
public function vaciarTelefonos(): void → Elimina todos los teléfonos*/

<?php

class EmpleadoTeléfono{
    private array $teléfonos = [];

    public function __construct(
      protected  string $nombre, 
      protected string $apellidos, 
      protected float $sueldo, 
      protected  bool $impuestos){

    }

    public function anyadirTelefono(int $telefono) :void{
        $this->teléfonos[] = $telefono;
    }

    public function listarTelefonos() : string{
        return implode(", ", $this->teléfonos);
    }

    public function vaciarTelefonos() : void{
        $this->teléfonos = [];
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function getNombreCompleto():string{
        return $this->nombre.' '.$this->apellidos;
    }

    public function setNombreCompleto($nombre, $apellidos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
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


    }

    $empleado = new Empleado('Lenny', 'Fernández Vigil-Escalera', 10000, true);
    echo "nombre completo: ". $empleado->getNombreCompleto(). "<br>";
    echo "sueldo". $empleado->getSueldo(). "<br>";
    if ($empleado->debePagarImpuestos() == true) {
        echo "no debe pagar impuestos: ". $empleado->debePagarImpuestos(). "<br>";

    }else{
        echo "debe pagar impuestos: ". $empleado->debePagarImpuestos(). "<br>";
    }

    $empleadoTelefono->anyadirTelefono(123456789);
    $empleadoTelefono->anyadirTelefono(987654321);

    echo "teléfonos: ". $empleadoTelefono->listarTelefonos(). "<
    $empleadoTelefono->vaciarTelefonos(). "<br>";
    echo "Teléfonos después de vaciar". $empleadoTelefono->listarTelefonos(). "<br>";

  










































