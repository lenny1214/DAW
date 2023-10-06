/*001Empleado.php: Crea una clase Empleado con su nombre, apellidos y sueldo.
Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando
el sueldo es superior a 3333€) → debePagarImpuestos(): bool*/



<?php

class Empleado {
  

    public function __construct(
      protected  string $nombre, 
      protected string $apellidos, 
      protected float $sueldo, 
      protected  bool $impuestos){

    


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

  


















