<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ejercicio6 PHP POO</title>
    </head>
    <body>
        <?php

            include '../Ejercicio5/empleado.php';

            $empleado1 = new Empleado("Luis", "Martin Portillo",[],null);
            $empleado2 = new Empleado("Luis", "Martin Perez",[],5600);

            $respuesta1 = $empleado1->getNombreCompleto();
            echo($respuesta1."<br>");
            $respuesta2 = $empleado2->getNombreCompleto();
            echo($respuesta2);

            if($empleado1->debePagarImpuestos1()){
                echo("<p>El empleado 1 ({$empleado1->getNombreCompleto()}) debe pagar impuestos.</p>");
            }

            if($empleado2->debePagarImpuestos1()){
                echo("<p>El empleado 2 ({$empleado2->getNombreCompleto()}) debe pagar impuestos.</p>");
            }


            $empleado1->añadirTelefonos([687980888,657900123,679879855]);

            echo($empleado1->listarTelefonos()."<br>");

            $empleado2->añadirTelefonos([662041188]);

            echo($empleado2->listarTelefonos()."<br>");

            $empleado2->vaciarTelefonos();

            $empleado2->listarTelefonos();

        ?>
    </body>
</html>