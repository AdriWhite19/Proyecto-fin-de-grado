<?php

class Categoria
{
    private string $Descripcion;
    public function __construct(string $Descripcion) 
    {
        $this->Descripcion = $Descripcion;
    }

    /*
    public function AñadeCategoria($conexion)
    {
        $sql = "SELECT Identificador FROM productos WHERE Nombre = '" . $this->nombreProducto . "'";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            return "Ese producto ya existe";
        } else {
            if ($_FILES["Imagen"]["size"] > 0) {
                $sql = "INSERT INTO productos (Nombre,Categoria,Marca,Peso,Precio,Imagen) VALUES (?,?,?,?,?,?)";
                if ($stmt = mysqli_prepare($conexion, $sql)) {
                    mysqli_stmt_bind_param(
                        $stmt,
                        "sissdb",
                        $this->nombreProducto,
                        $this->categoria,
                        $this->marca,
                        $this->peso,
                        $this->precio,
                        $this->imagen
                    );

                    $data = file_get_contents($_FILES["Imagen"]["tmp_name"]);
                    mysqli_stmt_send_long_data($stmt, 5, $data);
                    if (mysqli_stmt_execute($stmt)) {
                        return "";
                    } else {
                        return "Algo salió mal, por favor vuelve a intentarlo.";
                    }
                }
            } else {
                $sql = "INSERT INTO productos (Nombre,Categoria,Marca,Peso,Precio) VALUES (?,?,?,?,?)";
                if ($stmt = mysqli_prepare($conexion, $sql)) {
                    mysqli_stmt_bind_param(
                        $stmt,
                        "sissd",
                        $this->nombreProducto,
                        $this->categoria,
                        $this->marca,
                        $this->peso,
                        $this->precio
                    );
                    if (mysqli_stmt_execute($stmt)) {
                        return "";
                    } else {
                        return "Algo salió mal, por favor vuelve a intentarlo.";
                    }
                }
            }
        }
    }
    
    public function ActualizaCategoria($conexion, $Id)
    {
        if ($this->imagen["size"] > 0) {
            $sql = "UPDATE productos SET Nombre=?,Categoria=?,Marca=?,Peso=?,Precio=?,Imagen=? WHERE Identificador=?";

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
        } else {
            $sql = "UPDATE productos SET Nombre = ?,Categoria = ?,Marca = ?,Peso = ?,Precio = ? WHERE Identificador = ?";

            if ($stmt = mysqli_prepare($conexion, $sql)) {

                mysqli_stmt_bind_param(
                    $stmt,
                    "sissdi",
                    $this->nombreProducto,
                    $this->categoria,
                    $this->marca,
                    $this->peso,
                    $this->precio,
                    $Id
                );

                if (mysqli_stmt_execute($stmt)) {
                    return "";
                } else {
                    return "Algo salió mal, por favor vuelve a intentarlo.";
                }
            }
        }
    }
    
    public static function ObtenerCategorias($conexion)
    {
        $sql = "SELECT Identificador, Nombre, Marca, Precio, Imagen FROM productos WHERE Categoria =" . $categoria;
        $result = $conexion->query($sql);
        $productos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($productos, $row);
            }
        }
        return $productos;
    }

    public static function BorrarCategoria($conexion, $Id)
    {
        $sql = "DELETE FROM productos WHERE Identificador = " . $Id;
        if (mysqli_query($conexion, $sql)) {
            return ""; // Borrado
        } else {
            return "Error al borrar el artículo: " . mysqli_error($conexion);
        }
    }
    */
}