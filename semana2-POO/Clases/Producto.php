
<?php

    interface darDatos{
        public function darDatos();
    }
    abstract class Producto{
        private $precio;
        private $nombre;
        private $descripcion;

        //METODO CONSTRUCTOR
        public function __construct($nombre, $descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
        }

        public function ponPrecio($nuevoPrecio){
            $this->precio = $nuevoPrecio;
        }

        public function dimePrecio(){
            return $this->precio;
        }

        public function ponNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function dimeNombre(){
            return $this->nombre;
        }

        public function ponDescripcion($nuevaDescripcion){
            $this->descripcion = $nuevaDescripcion;
        }

        public function dimeDescripcion(){
            return $this->descripcion;
        }

        public function darDatos(){
            return [$this->nombre,$this->descripcion,$this->precio];
        }
    }

    class ProductoFisico extends Producto implements darDatos{
        private $anchura;
        private $altura;
        private $profundidad;
        private $peso;

        //METODO CONSTRUCTOR
        public function __construct($nombre, $descripcion,$precio,$anchura,$altura,$profundidad,$peso){
            $this->ponNombre($nombre);
            $this->ponDescripcion($descripcion);
            $this->ponPrecio($precio);
            $this->anchura = $anchura;
            $this->altura = $altura;
            $this->profundidad = $profundidad;
            $this->peso = $peso;
        }

        public function darDatos(){
            return [$this->dimeNombre(),$this->dimeDescripcion(),$this->dimePrecio(),$this->anchura,$this->altura,$this->profundidad,$this->peso];
        }
    }

    class ProductoVirtual extends Producto implements darDatos{
        private $url;
        private $pesoenkb;

        //METODO CONSTRUCTOR
        public function __construct($nombre, $descripcion,$precio,$url,$pesoenkb){
            $this->ponNombre($nombre);
            $this->ponDescripcion($descripcion);
            $this->ponPrecio($precio);
            $this->url = $url;
            $this->pesoenkb = $pesoenkb;
        }

        public function darDatos(){
            return [$this->dimeNombre(),$this->dimeDescripcion(),$this->dimePrecio(),$this->url,$this->pesoenkb];
        }
    }


?>