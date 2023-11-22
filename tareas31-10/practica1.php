<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HolaMundo</title>
    </head>
    
    <body>
        <h2><?php 
           echo "Este texto se mostrará en la página web."
        ?><h2>
        <?php 
           //COMENTARIO UNA LINEA
           /* COMENTARIO VARIAS 
              LINEAS
           */
           print("Esto es un print.");

           //EN PHP TENEMOS QUE DEFINIR EL TIPO DE DATO TAL CUAL ES
           //$nombre = "Luis";
           //$contador = 0;

            //VARIABLES EN MINUSCULAS, CONSTANTES EN MAYUSCULAS
            //CONSTANTES SIN $
            //EJEMPLO

            define("PI", 3.1416);
            const IVA = 0.21;

            echo PI, " ", IVA;
        ?>

        <ul>
            <?php
                for($i=0; $i < 6;$i++){
                    echo "<li>" .$i. "</li>";
                }
            ?>
        </ul>
    </body>
</html>