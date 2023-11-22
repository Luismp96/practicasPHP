<?php

    echo ("Nombre: " . $_POST["nombre"]);

    echo("<html><br></br></html>");

    $ingresos = $_POST["ingresos"];

    switch ($ingresos){
        case "1":
        case "2":
            echo("No debe Pagar Impuestos.");
            break;
        case "3":
            echo("Debe Pagar Impuestos.");
            break;
        default:
            echo("No se han recibido Ingresos.");
            break;
    }
    
    echo("<html><br></br></html>");
    
    
?>