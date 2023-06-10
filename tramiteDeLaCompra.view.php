<!DOCTYPE html>
<html>
<head>
    <title>Método de Pago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script scr="https://maxdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>
<body class="body-container">
<div class="body-index"></div>
    <div class="reset-password-container">
        <h1>Método de Pago</h1>
        <form method="post" action="procesar_pago.php">
            <label for="card-number">Número de Tarjeta:</label>
            <input type="text" id="card-number" name="card-number" placeholder="Ingrese el número de tarjeta" required>

            <label for="card-holder">Titular de la Tarjeta:</label>
            <input type="text" id="card-holder" name="card-holder" placeholder="Ingrese el titular de la tarjeta" required>

            <label for="expiry-date">Fecha de Vencimiento:</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/AA" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="Ingrese el CVV" required>

            <input type="submit" value="Pagar">
        </form>
        <input type="button" onclick="window.location='carrito.php'" class="btn btn-primary botones-sup-izq" value="Volver" />
     </div>
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
    var cardNumber = document.getElementById('card-number').value;
    var cardHolder = document.getElementById('card-holder').value;
    var expiryDate = document.getElementById('expiry-date').value;
    var cvv = document.getElementById('cvv').value;

    // Validar los campos según tus requisitos
    if (cardNumber.length !== 16 || isNaN(cardNumber)) {
        alert('Ingrese un número de tarjeta válido');
        event.preventDefault();
        return;
    }

    if (cardHolder.trim() === '') {
        alert('Ingrese el titular de la tarjeta');
        event.preventDefault();
        return;
    }

    if (!expiryDate.match(/^(0[1-9]|1[0-2])\/\d{2}$/)) {
        alert('Ingrese una fecha de vencimiento válida (MM/AA)');
        event.preventDefault();
        return;
    }

    if (cvv.length !== 3 || isNaN(cvv)) {
        alert('Ingrese un CVV válido');
        event.preventDefault();
        return;
    }

});

    </script>
</body>
</html>
