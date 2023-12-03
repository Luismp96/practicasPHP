<?php

    function listadoProducto(){
        $productos = file_get_contents("BD/productos.json");
        $json = json_decode($productos);

        foreach($json as $producto){
            echo "<article>
                <h3>".$producto->nombre."</h3>
                <p>".$producto->descripcion."</p>
                <p>".$producto->precio." €</p>
                <a href='?p=".base64_encode(json_encode($producto))."'><button>Añadir al Carrito</button></a>
            </article>";
        }
    }

?>