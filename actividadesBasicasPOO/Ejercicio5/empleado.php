<?php


    class Empleado{
        //ATRIBUTOS
        private $nombre;
        private $apellidos;
        private $sueldo;
        private $telefonos;
        private $debePagarImp;

        //CONSTRUCTOR DE LA CLASE 3 PARAMETROS
        //SI NO INFORMAMOS SUELDO 

        public function __construct($nombre,$apellidos,$telefonos,$sueldo=null){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->telefonos = $telefonos;
            if ($sueldo != null){
                $this->sueldo=$sueldo;
            }else{
                $this->sueldo=1000;
            }
            
        }
        
            
        //GETTERS Y SETTERS

        public function getNombre(){
            return $this->nombre;
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

        public function debePagarImpuestos1(){

            if($this->sueldo > 3333){
                $this->debePagarImp = true;
            }else{
                $this->debePagarImp = false;
            }
            return $this->debePagarImp;
        }

        public function añadirTelefonos($telefonos){

            foreach($telefonos as $telefono){
                array_push($this->telefonos, $telefono);
            }
            
        }

        public function listarTelefonos(){

            $telefonosSalida=[];

            if(!empty($this->telefonos)){
                $telefonosSalida = implode(", ",$this->telefonos);
            }            
            return $telefonosSalida;
        }

        public function vaciarTelefonos(){
            unset($this->telefonos);
        }

    }

?>