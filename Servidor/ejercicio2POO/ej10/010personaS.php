<?php

    class Persona{
       protected string $nombre;
       protected string $apellidos;
       protected string $edad;
       

        public function __construct(
            protected string $nombre="", 
            protected string $apellidos="",  
           ){

            public function getNombre(){
                return $this->nombre;
            }
            
            public function getApellidos(){
                return $this->apellidos;
            }

            public function getNombreCompleto():string{
                return $this->nombre.' '.$this->apellidos;
            }

            public function getEdad():string{
                return $this->edad;
            }

            public static function toHtml(Persona $per): string {
                $html = "<p>Nombre Completo: ". $per->getNombreCompleto(). "</p>";
                $html .= "<p>Edad: " . $this->getEdad() . "</p>";
                return $html;
            }
            
            



    }
    }


