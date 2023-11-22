<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Practica10-1</title>
    </head>
    
    <body>
        <?php

        echo "<h4> Practica 10 con FOR </h4>";
    
        $contador = 1;

        for ($i = 2; $i <= 20; $i=$i+2) {
            echo "- 2 x " . $contador . " = ". $i;
            $contador +=1;
            echo "<br>";
        }

        echo "<br>";
        echo "<h4> Practica 10 con WHILE </h4>";

        $contador = 1;
        $resultado = 2;

        while($contador<=10){

            echo "- 2 x " . $contador . " = ". $resultado;
            $resultado = $resultado + 2;
            $contador++;
            echo "<br>";
        }

        echo "<br>";
        echo "<h4> Practica 10 con DO/WHILE </h4>";

        $contador = 1;
        $resultado = 2;

        do {
            echo "- 2 x " . $contador . " = ". $resultado;
            $resultado = $resultado +2;
            $contador++;
            echo "<br>";
        } while ($contador <= 10);

        ?>

        

    </body>
</html>