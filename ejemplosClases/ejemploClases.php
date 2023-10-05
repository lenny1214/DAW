<?php


class Coche{


private int $ruedas=4;
private bool $marchas=true;
private string $color='Rojo';
private string $marca='Seat';
private string  $modelo='Leon';
private string $matricula='123456789';
private float $potencia=500;
private int $puertas=5;


function setColor($col):void {//El :void para decirle que no va a devovler nada

    $this->color=$col;
}



public function imprimir(){
    echo $this->ruedas"<br>";
    echo $this->marchas"<br>";
    echo $this->color"<br>";
    echo $this->marca"<br>";
    echo $this->modelo"<br>";
    echo $this->matricula"<br>";
    echo $this->potencia"<br>";
    echo $this->puertas;
}



}

$miCoche=new Coche();
$miCoche->setColor('rojo');
$miCoche->imprimir();