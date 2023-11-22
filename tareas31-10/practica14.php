<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Practica14</title>
    </head>
    
    <body>

        <form action="destino14.php" method="post">
            <textarea id="textarea" name="carta" rows="4" cols="50">
            En la ciudad de <input type="text" name="ciudad" id ="espacio1">, se acuerda entre la Empresa <input type="text" name="empresa" id ="espacio2"> representada por el Sr. <input type="text" name="nombre" id ="espacio3"> en su carácter
            de Apoderado, con domicilio en la calle <input type="text" name="calle" id ="espacio4"> y el Sr. <input type="text" name="nombre1" id ="espacio5">, futuro empleado con domicilio en <input type="text" name="domicilio" id ="espacio6">,
            celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los articulos 90, 92, 93,
            94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
            </textarea>
            <input type="submit" value="Enviar">
        </form>



        <?php
            echo("<html>
            
            </html>");

        ?>
        
    </body>
</html>