<?php

    echo ("Nombre: " . $_POST["nombre"]);

    echo("<html><br></br></html>");

    echo("Deportes que Practica: ");
    echo("<html><br></br></html>");

    if (isset($_POST["futbol"])){
        if(isset($_POST["futbol"]) == "F"){
            echo("- FUTBOL ");
        }
    }

    if(isset ($_POST["baloncesto"])){
        if(isset ($_POST["baloncesto"]) == "B"){
            echo("- BALONCESTO ");
        }
    }
    
    if(isset ($_POST["tenis"])){
        if(isset ($_POST["tenis"]) == "T"){
            echo("- TENIS ");
        }
    }
    
    if(isset ($_POST["voley"])){
        if(isset ($_POST["voley"]) == "V"){
            echo("- VOLEY ");
        }
    }

    echo("<br>");
    //LA OTRA MANERA DE MANEJAR LOS CHECKBOX (ARRAY CREADO)
    var_dump($_POST["checks"]);
    echo("<br>");
    echo(implode(", ",$_POST["checks"]));
    
?>