<?php

session_start();

if(!isset($_SESSION["Id"])){
    header("Location: login.php");
    return;
}

require("abrirConexion.php");
require("Modelos/Carrito.php");

$IdCliente = $_SESSION["Id"];

$carrito = new Carrito();
$resultado = $carrito->ObtenerCarrito($conexion, $IdCliente);

$ListaCompra = $resultado->lista;
$total = $resultado->total;

require("cabecera.php");

mysqli_close($conexion);

require("carrito.view.php");

?>