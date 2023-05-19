<?php
session_start();

if (!isset($_SESSION["Administrador"]) || $_SESSION["Administrador"] !== 1) {
    header("location: index.php");
    exit;
}

require("abrirConexion.php");
require("Modelos/Categoria.php");

$mensaje = "";
$Operacion = "Editar Categoria";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Id = $_POST["Id"];
    $Descripcion = $_POST["Descripcion"];

    $categoria = Categoria::AñadeCategoria($Id, $Descripcion, $conexion);
   
} else {
    $Id = $_GET["Id"];

    $row = Categoria::ObtenerCategorias($conexion, $Id);

    $id = $row[0]["Id_Categoria"];
    $descripcion = $row[0]["Descripción"];
}
require("cabecera.php");

mysqli_close($conexion);

require('editarCategoria.view.php');
?>