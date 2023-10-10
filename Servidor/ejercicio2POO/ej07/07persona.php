<?php

    class Persona{
       protected string $nombre;
       protected string $apellidos;
       
       

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












    }
    }
