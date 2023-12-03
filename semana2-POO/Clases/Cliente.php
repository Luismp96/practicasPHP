<?php

     class Cliente{
        private $nombre;
        private $apellidos;
        private $email;
        private $telefono;
        private $direcciones;

        //METODO CONSTRUCTOR
        public function __construct($nombre,$apellidos,$email,$telefono){
            $this->nombre = $nombre;
            $this->$apellidos;
            $this->$email;
            $this->$telefono;
        }

        public function anadirDireccion($nuevaDireccion){
            array_push($this->direcciones,$nuevaDireccion);
        }

    }

?>