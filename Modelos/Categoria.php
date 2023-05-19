<?php

class Categoria
{
    private string $Descripcion;
    public function __construct(string $Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }


    public static function AñadeCategoria($id_categoria, $descripcion, $conexion)
    {
      
            $sql = "INSERT INTO categorias (Id_Categoria, Descripcion) VALUES (?,?)";
            if ($stmt = mysqli_prepare($conexion, $sql)) {
                mysqli_stmt_bind_param(
                    $stmt,"is",$id_categoria,$descripcion
                );

                if (mysqli_stmt_execute($stmt)) {
                    return "";
                } else {
                    return "Algo salió mal, por favor vuelve a intentarlo.";
                }
            }
        }

    /*
    public function ActualizaCategoria($conexion, $Id)
    {
    $sql = "UPDATE Categorias SET Nombre=?,Categoria=?,Marca=?,Peso=?,Precio=?,Imagen=? WHERE Identificador=?";
    if ($stmt = mysqli_prepare($conexion, $sql)) {
    mysqli_stmt_bind_param(
    $stmt,
    "sissdbi",
    $this->nombreProducto,
    $this->categoria,
    $this->marca,
    $this->peso,
    $this->precio,
    $this->imagen,
    $Id
    );
    $data = $this->imagen;
    mysqli_stmt_send_long_data($stmt, 5, $data);
    if (mysqli_stmt_execute($stmt)) {
    return "";
    } else {
    return "Algo salió mal, por favor vuelve a intentarlo.";
    }
    }
    } 
    }
    */
    public static function ObtenerCategorias($conexion, $id = false)
    {

        if ($id != false) {

            $sql = "SELECT Id_Categoria, Descripción FROM categorias WHERE Id_Categoria = " . $id;
            $result = $conexion->query($sql);

            $categorias = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($categorias, $row);
                }
            }
            return $categorias;

        } else {
            $sql = "SELECT Id_Categoria, Descripción FROM categorias";
            $result = $conexion->query($sql);
            $categorias = array();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    array_push($categorias, $row);
                }
            }
            return $categorias;
        }
    }


    public static function BorrarCategoria($conexion, $Id)
    {
        $sql = "DELETE FROM categorias WHERE Id_Categoria = " . $Id;

        $isCorrect = "";

        if (!mysqli_query($conexion, $sql)) {

            $isCorrect = "Error al borrar la categoria: " . mysqli_error($conexion);
        }

        return $isCorrect;
    }

}