<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Adrian Blanco Martin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script scr="https://maxdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style> p{
        margin-left: 300px;
        margin-right: 300px;
    font-size: 25px;
      font-family: 'Nunito', sans-serif;
    }

     .formulario1 {
        margin-left: 500px;
        margin-right: 500px;
      width: 550px;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 8px;

    }

    .form-container {
    align-items: center;
      width: 400px;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="tel"],
    .form-group input[type="email"],
    .form-group textarea {
      width: 500px;
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

   
</style>
</head>

<body>

   <div class="cabecera">
    <div class="Title">TEXTOS LEGALES</div>

  </div>

     <div class="logo">
      <img id="logo-image" src="img/logo_akaridesign.png">
    </div>
    
     
       <h1>FORMULARIO DE CONTACTO</h1>
       <hr>
       <p>Si tienes alguna duda no dudes en ponerte en contacto conmigo a través del formulario de abajo</p>
       <p><strong>ENCARGOS</strong></p>
       <p>Si quieres un encargo personalizado también puedes ponerte en contacto conmigo a través del formulário de contacto.</p>

 <div class="formulario1">
        <form action="enviar_formulario.php" method="POST">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" required>
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="mensaje">Descripción de la solicitud:</label>
      <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
    </div>
    <button type="submit">Enviar</button>
  </form>
</div>

     <div class="volver">
            <button class="Volver" onclick="window.location='buscar.php'" value="Volver">❀ VOLVER AL LA TIENDA</button>
        </div>

</body>
  <footer>
    <nav>
      <ul>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="Aviso_legal.php">Aviso legal</a></li>
        <li><a href="Aviso_de_privacidad.php">Aviso de privacidad</a></li>
        <li><a href="Politica_de_cookies.php">Política de cookies</a></li>
      </ul>
    </nav>
  </footer>
  <script src="jquery-3.6.0.min.js"></script>
</body>
</html>