<?php

    interface ObtenerDatos{
        public function obtenerDatos();
    }
    abstract class Persona{

        //ATRIBUTOS CLASE PERSONA
        private $nombre;
        private $edad;
        private $localidad;

        //CONSTRUCTOR CLASE PERSONA
        public function __construct ($nombre,$edad,$localidad){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->localidad = $localidad;
        }

        //GETTERS Y SETTERS
        public function obtenerNombre(){
            return $this->nombre;
        }

        public function darNombre($nombre){
            $this->nombre = $nombre;
        }

        public function obtenerEdad(){
            return $this->edad;
        }

        public function darEdad($edad){
            $this->edad = $edad;
        }

        public function obtenerLocalidad(){
            return $this->localidad;
        }

        public function darLocalidad($localidad){
            $this->localidad = $localidad;
        }

    }

    class Arbitro extends Persona implements ObtenerDatos{
        //ATRIBUTOS CLASE ARBITRO
        private $numeroColegiado;
        private $temporadasArbitradas;
        private $nivel;

        //CONSTRUCTOR CLASE ARBITRO
        public function __construct ($nombre, $edad, $localidad, $numeroColegiado, $temporadasArbitradas,$nivel){

            $this->darNombre($nombre);
            $this->darEdad($edad);
            $this->darLocalidad($localidad);
            $this->numeroColegiado = $numeroColegiado;
            $this->temporadasArbitradas = $temporadasArbitradas;
            $this->nivel = $nivel;

        }

        //GETTERS Y SETTERS
        public function obtenerNumeroColegiado(){
            return $this->numeroColegiado;
        }

        public function darNumeroColegiado($numero){
            $this->numeroColegiado = $numero;
        }

        public function obtenerTemporadasArbitradas(){
            return $this->temporadasArbitradas;
        }

        public function darTemporadasArbitradas($numero){
            $this->temporadasArbitradas = $numero;
        }

        public function obtenerNivel(){
            return $this->nivel;
        }    

        public function darNivel($nivel){
            $this->nivel = $nivel;
        }

        //METODO OBLIGATORIO MARCADO POR INTERFACE
        public function obtenerDatos(){
            return [$this->obtenerNombre(),$this->obtenerEdad(), $this->obtenerLocalidad(), $this->numeroColegiado,$this->temporadasArbitradas,$this->nivel];
        }

    }

    class Jugador extends Persona implements ObtenerDatos{
        //ATRIBUTOS CLASE JUGADOR
        private $dorsal;
        private $posicion;
        private $nombreEquipo;

        //CONSTRUCTOR CLASE JUGADOR
        public function __construct($nombre, $edad, $localidad, $dorsal,$posicion,$nombreEquipo){
            $this->darNombre($nombre);
            $this->darEdad($edad);
            $this->darLocalidad($localidad);
            $this->dorsal = $dorsal;
            $this->posicion = $posicion;
            $this->nombreEquipo = $nombreEquipo;
        }

        //GETTERS Y SETTERS
        public function obtenerDorsal(){
            return $this->dorsal;
        }

        public function darDorsal($numero){
            $this->dorsal = $numero;
        }

        public function obtenerPosicion(){
            return $this->posicion;
        }

        public function darPosicion($posicion){
            $this->posicion = $posicion;
        }

        public function obtenerNombreEquipo(){
            return $this->nombreEquipo;
        }    

        public function darNombreEquipo($nombre){
            $this->nombreEquipo = $nombre;
        }

        //METODO OBLIGATORIO MARCADO POR INTERFACE
        public function obtenerDatos(){
            return [$this->obtenerNombre(),$this->obtenerEdad(), $this->obtenerLocalidad(), $this->dorsal,$this->posicion,$this->nombreEquipo];
        }

    }

    $jugador1 = new Jugador("Luis Martin",27,"Mostoles",12,"Base","Mostoles CB");
    $arbitro1 = new Arbitro("Jorge Perez",30,"Parla",1234,3,1);

    //MODIFICAMOS DORSAL JUGADOR 1, LO MOSTRAMOS Y DEVOLVEMOS ARRAY DE NUEVO
    echo "<h2>JUGADOR</h2><br>";

    echo"<p>El array del Jugador 1 es: </p>";
    echo(var_dump($jugador1->obtenerDatos()) . "<br>");

    echo("<br>");
    
    $jugador1->darDorsal(20);
    echo "El nuevo dorsal del Jugador 1 es: " . $jugador1->obtenerDorsal() . "<br>";

    echo"<p>El NUEVO array del Jugador 1 es: </p>";
    echo(var_dump($jugador1->obtenerDatos()) . "<br>");


    //MODIFICAMOS NIVEL ARBITRO 1, LO MOSTRAMOS Y DEVOLVEMOS ARRAY DE NUEVO
    echo "<h3>ARBITRO</h3><br>";
    echo"<p>El array del Arbitro 1 es: </p>";
    echo(var_dump($arbitro1->obtenerDatos()) . "<br>");

    echo("<br>");
    $arbitro1->darNivel(2);
    echo "El nuevo nivel del Arbitro 1 es: " . $arbitro1->obtenerNivel() . "<br>";

    echo"<p>El NUEVO array del Arbitro 1 es: </p>";
    echo(var_dump($arbitro1->obtenerDatos()) . "<br>");
?>