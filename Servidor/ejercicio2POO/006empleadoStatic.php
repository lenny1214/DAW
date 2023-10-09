/*006EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. Completa el
siguiente método con una cadena HTML que muestre los datos de un empleado
dentro de un párrafo y todos los teléfonos mediante una lista ordenada (para ello,
deberás crear un getter para los teléfonos):
public static function toHtml(Empleado $emp): */


<?php

class Empleado {
  
    private array $telefonos = [];

    private static float $sueldoTope = 3333;


    public function __construct(
      protected  string $nombre="", 
      protected string $apellidos="",  
      protected float $sueldo=1000, 
      protected  bool $impuestos=true){

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

    public static function toHtml(Empleado $emp): string {
        $html = "<p>Nombre: ". $emp->getNombreCompleto(). "</p>";
        $html.= "<p>Sueldo: ". $emp->getSueldo(). "</p>";
        $html.= ($emp->debePagarImpuestos())?  "no debe pagar impuestos: ": "Debe pagar impuestos";
        $html.= "<p>Teléfonos: ". $emp->listarTelefonos(). "</p>";
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

    










