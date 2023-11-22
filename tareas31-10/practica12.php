<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Practica12</title>
    </head>
    
    <body>

        <form action="destino12.php" method="post">
            Escribe tu nombre: <input type="text" name="nombre" id ="nombre">
            <br></br>
            Deportes que Practica: <input type="checkbox" name="futbol"  value="F">Futbol</input>
                                   <input type="checkbox" name="baloncesto" value="B">Baloncesto</input>
                                   <input type="checkbox" name="tenis" value="T">Tenis</input>
                                   <input type="checkbox" name="voley" value="V">Voley</input>
            <br></br>
            <!-- OTRA MANERA DE REALIZAR CHECKBOX (CREAR ARRAY) --> 
            Marque: <input type="checkbox" name="checks[]"  value="Prim">Primero</input>
                    <input type="checkbox" name="checks[]" value="Seg">Segundo</input>

            <input type="submit" value="Enviar">
        </form>

    </body>
</html>
