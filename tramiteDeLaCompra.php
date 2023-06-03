<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
   $cardNumber = $_POST['card-number'];
   $cardHolder = $_POST['card-holder'];
   $expiryDate = $_POST['expiry-date'];
   $cvv = $_POST['cvv'];
   
   if($cardNumber != "" && $cardHolder != "" && $cardHolder != "" && $cvv != ""){
   
    
    echo "<script> alert('¡Pago procesado con éxito!')</script>";
    
    /* header('location: tramiteDeLaCompra.php'); */
    }

    
   
} else {
    
   $cardNumber = " ";
   $cardHolder = " ";
   $expiryDate = " ";
   $cvv = " ";


}


// Aquí puedes realizar cualquier procesamiento adicional, como almacenar la información en una base de datos, realizar validaciones adicionales, etc.

// Simulación de procesamiento exitoso


require("tramiteDeLaCompra.view.php");
?>

