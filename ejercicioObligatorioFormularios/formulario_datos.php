<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Obligatorio Formularios</title>
    </head>
    
    <body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

           $arrayDatos = $_POST["datos"];
           
        }
    ?>

    <h2>Datos Introducidos en Formulario: </h2>
    <ul>
    <?php
        
        $contador = 1;

        echo "<li><strong>Nombre:</strong> " . $arrayDatos["nombre"] . "</li>";

        foreach ($arrayDatos["ciudades"] as $clave => $valor){
            echo "<li><strong>Ciudad " . $contador . ": " . "</strong>". $valor ;
            $contador++;
        }

        echo "<li><strong>Fecha de Nacimiento:</strong> " . $arrayDatos["fecha"] . "</li>";
        echo "<li><strong>Comentario:</strong> " . $arrayDatos["textarea"] . "</li>";
        echo "<li><strong>Email:</strong> " . $arrayDatos["email"] . "</li>";
        echo "<li><strong>Rango Salario Anual:</strong> " . $arrayDatos["rangoSalario"] . "</li>";

    ?>
    </ul>
    </body>
</html>



