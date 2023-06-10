<!DOCTYPE html>
<html>

<head>
    <meta name="author" content="Adrian Blanco Martin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script scr="https://maxdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    require('cabecera.view.php');
    $esAdmin = false;
    if (isset($_SESSION["Administrador"]) && $_SESSION["Administrador"] == 1) {
        $esAdmin = true;
    }
    ?>
    
    <div class="pedido-correcto">
    <h3 class="pedidoCorrecto">PEDIDO REALIZADO CORRECTAMENTE</h3>
    <a class="btn btn-info mt-3" style="padding: 3px 8px;" href="buscar.php">Seguir Comprando</a>
    </div>
    
    
            
     
     

</html>