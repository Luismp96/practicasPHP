<?php


    class Persona{
        //ATRIBUTOS
        public $nombre;
        protected $edad;
        private $email;

        //CONSTRUCTOR DE LA CLASE
        public function __construct($nombre, $edad, $email){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->email = $email;
        }
            
        //GETTERS Y SETTERS
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        //RESTO DE FUNCIONES
        public function saludar(){
            echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.<br>";
        }
    }


?>