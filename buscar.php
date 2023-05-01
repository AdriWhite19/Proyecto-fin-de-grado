<?php

session_start();



    require("abrirConexion.php");
    require("Modelos/Producto.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productoBuscado = $_POST['texto'];
        $productos = Producto::MostrarProductos($conexion, $productoBuscado);
    } else {
        $productos = Producto::MostrarProductos($conexion,"");
    }

    require("cabecera.php");
    // Close connection
    mysqli_close($conexion);

require('buscar.view.php');
?>