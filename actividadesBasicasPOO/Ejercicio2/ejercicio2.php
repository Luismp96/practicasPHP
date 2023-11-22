<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ejercicio2 PHP POO</title>
    </head>
    <body>
        <?php

            include '../Ejercicio1/vehiculo.php';

            $v1 = new Vehiculo("1296KDX",6);
            $v2 = new Vehiculo("0476LTG",2);

            echo($v1->ver()."<br>");
            $cocheCompleto = $v2->ver_completo();
            echo(var_dump($cocheCompleto)."<br>");

            $v2->actualizar_matricula("1111JJJ");

            echo($v2->getMatricula());
        ?>
    </body>
</html>
