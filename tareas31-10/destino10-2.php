<?php

    echo $_POST["nombre"] . "<br></br>" . $_POST["edad"];

    if($_POST["edad"] >=18){
        echo("<html><p> Eres Mayor de Edad </p></html>");
    }else{
        echo("<html><p> No eres Mayor de Edad </p></html>");
    }

?>