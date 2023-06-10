<?php

session_start();

if(!isset($_SESSION["Id"])){
    header("Location: login.php");
    return;
}

require("abrirConexion.php");
require("Modelos/Carrito.php");

  $IdCliente = $_SESSION["Id"];


  Carrito::VaciarCarrito($conexion, $IdCliente);


require("cabecera.php");

mysqli_close($conexion);

require("procesar_pago.view.php");

?>