<?php

    include "Clases/Carrito.php";
    include "Clases/Producto.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    include "INC/funciones.php";

    session_start();

    include "PLANTILLA/cabecera.php";

    crearCarritoSiNoExiste();
    anadirProductoAlCarrito();
    mostrarCarrito();

    if(!isset($_GET['pagina'])){
        listadoProducto();
    }else{
        if($_GET['pagina'] == 'datosCliente'){
            formularioCliente();
        }else if ($_GET['pagina'] == 'procesaPedido'){
            enviaPedido();
        }
    }

    include "PLANTILLA/piedepagina.php";
?>

