<?php

    //Include de la Clase persona a la que me refiero (archivo .php)
    include 'persona.php';

    //INICIALIZAMOS 1 OBJETO PERSONA
    $persona = new Persona('Pepe',56,'pepe@gmail.com');

    $persona->saludar(); //IMPRIME SALUDO

    $persona->setNombre('Antonio');
    echo($persona->getNombre());

?>