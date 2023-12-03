<?php

    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    include "INC/funciones.php";

    session_start();

    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = new Carrito();
    }

    if(isset($_GET['p'])){
        $json = json_decode(base64_decode($_GET['p']));
        $_SESSION['carrito']->anadirProducto(

            "new ProductoFisico(
                $json->nombre,
                $json->descripcion,
                $json->precio,
                $json->anchura,
                $json->altura,
                $json->profundidad,
                $json->peso
            )"

        );
    }

    if(isset($_GET['b'])){

        $_SESSION['carrito']->borrarCarrito();
    }

    include "PLANTILLA/cabecera.php";

    listadoProducto();

    echo '<aside><h4>CARRITO</h4>';
    
    if($_SESSION['carrito']->listarProductos() != []){
        var_dump($_SESSION['carrito']->listarProductos());
    }   
    echo '</aside>';

    echo '<br><br><a href="?b="><button>BORRAR CARRITO</button></a>';

    include "PLANTILLA/piedepagina.php";
?>