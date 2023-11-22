<?php


    class Empleado{
        //ATRIBUTOS
        private $nombre;
        private $apellidos;
        private $sueldo;

        //CONSTRUCTOR DE LA CLASE
        public function __construct($nombre, $apellidos,$sueldo){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->sueldo = $sueldo;
        }
            
        //GETTERS Y SETTERS
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function getSueldo(){
            return $this->sueldo;
        }
        
        public function setSueldo($sueldo){
            $this-> sueldo = $sueldo;
        }

        public function getNombreCompleto(){
            $nombreCompleto = "{$this->getNombre()} {$this->getApellidos()}";

            return $nombreCompleto;    
        }

        public function debePagarImpuestos(){
            $var = false;
            if($this->getSueldo() > 3333){
                $var = true;
            }
            return $var;
        }

    }


?>