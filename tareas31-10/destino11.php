<?php

    echo ("Nombre: " . $_POST["nombre"]);

    echo("<html><br></br></html>");

    switch ($_POST["estudios"]){

        case "SE":
            echo ("No tienes estudios.");
            break;
        case "EP":
            echo ("Estudios Primarios.");
            break;
        case "ES":
            echo ("Estudios Secundarios.");
            break;
        default:
            echo ("Estudios No Informados");
    }
    
?>