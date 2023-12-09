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

    function crearCarritoSiNoExiste(){
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = new Carrito();
        }
    }

    function anadirProductoAlCarrito(){
        if(isset($_GET['p'])){
            $json = json_decode(base64_decode($_GET['p']));
            $_SESSION['carrito']->anadirProducto(
    
                new ProductoFisico(
                    $json->nombre,
                    $json->descripcion,
                    $json->precio,
                    $json->anchura,
                    $json->altura,
                    $json->profundidad,
                    $json->peso
                )
    
            );
        }
    }

    function mostrarCarrito(){
        echo '<aside><h4>CARRITO</h4>';
        echo '<table>';

        if(isset($_GET['b'])){
            $_SESSION['carrito']->borrarCarrito();
        }
        foreach($_SESSION['carrito']->listarProductos() as $produ){
            echo '<tr>
                <td>
                    <h5>' . $produ->dimeNombre() . '</h5>
                    <p>' .$produ->dimeDescripcion() . '</p>
                </td>
                <td>
                    <p>' . $produ->dimePrecio().'</p>
                </td>
            <tr>';
        }

        echo '<tr><td>Total</td><td>'.$_SESSION['carrito']->calculaTotal().' €</td></tr>';
        echo '</table>';
        echo '<a href="?pagina=datosCliente"><button>Procesar Pedido</button></a>';
        echo '<br><br><a href="?b="><button>BORRAR CARRITO</button></a></aside>';
    }

    function borrarCarrito(){
         $_SESSION['carrito']->borrarCarrito();
    }

    function inicializarCarrito(){
        $_SESSION['carrito']->borrarCarrito();
    }

    function formularioCliente(){
        echo '<h4>Datos del Cliente</h4>
            <form method="POST" action="?pagina=procesaPedido">
                <p>Nombre: </p>
                <input type="text" name="nombre">
                <p>Apellidos: </p>
                <input type="text" name="apellidos">
                <p>Email: </p>
                <input type="text" name="email">
                <p>Telefono: </p>
                <input type="text" name="telefono">
                <input type="submit">
            </form>';
    }

    function enviaPedido(){

        echo "<h4>Pedido Procesado Correctamente!</h4>";

        $nuevoCliente = new Cliente(
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['email'],
            $_POST['telefono']
        );
        $_SESSION['carrito']->anadirCliente($nuevoCliente);
        
        $cadena = json_encode($_SESSION['carrito'], JSON_PRETTY_PRINT);

        file_put_contents("PEDIDOS/".date('U').".json",$cadena);
        session_destroy();

        echo "<p>Redirigiendo en 5 segundos...</p>";
        header("refresh:5;url=index.php");
    }

?>