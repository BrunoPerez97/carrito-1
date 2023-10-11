<?php
    $servidor = "localhost";
    $db = "carrito_venta";
    $usuario = "root";
    $password = "root";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    if (!$conexion){
        echo "conexion fallida";
    
    }

?>