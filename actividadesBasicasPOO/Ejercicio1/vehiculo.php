<?php


    class Vehiculo{
        //ATRIBUTOS
        private $matricula;
        private $edad;

        //CONSTRUCTOR DE LA CLASE
        public function __construct($matricula, $edad){
            $this->matricula = $matricula;
            $this->edad = $edad;
        }
            
        //GETTERS Y SETTERS
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function getEdad(){
            return $this->edad;
        }

        
        public function ver(){
            echo "El vehiculo con matricula {$this->matricula} tiene una antigüedad de {$this->edad} años";
        }

        public function actualizar_matricula($nuevaMatriula){
            $this->matricula = $nuevaMatriula;
        }

        public function ver_completo(){
            $datos = array(
                'matricula' => $this->getMatricula(),
                'edad' => $this->getEdad()
            );

            return $datos;
        }
        
    }


?>