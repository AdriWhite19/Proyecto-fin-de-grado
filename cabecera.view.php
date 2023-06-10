<div class="cabecera">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn menu_icon"></button>

        <div id="myDropdown" class="dropdown-content">

            <a href="index.php">Inicio</a>

            <?php
            foreach ($categorias as &$categoria) {

                echo '<a href="buscar.php?Id_Categoria='.$categoria["Id_Categoria"].'">' . $categoria["Descripción"] . '</a>';

            }
            ?>

        </div>
    </div>

    <div>
        <form class="form-search" action="buscar.php" method="post">
            <input type="search" placeholder="Buscar..." name="texto">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="Title">AKARI DESIGN</div>

    <?php
    if (!isset($_SESSION["loggedin"])) {
        ?>
        <div class="registro">
            <button class="botones" onclick="window.location='register.php'" value="Registrarse">❀ Registro de usuario</button>
        </div>

        <div>
            <button class="botones" onclick="window.location='login.php'" value="Login">❀ Inicio de sesión</button>
        </div>
        <?php
    } else {
        ?>
        <h3>
            <?php echo htmlspecialchars($_SESSION["Email"]); ?>
        </h3>
        <a href="gestionDeUsuario.php" class="botones">❀ Gestionar Cuenta</a>
        <a href="carrito.php" class="boton_carrito">
            <?php
            if ($carrito_Cantidad > 0) {
                ?>
                <span class="badge badge-light">
                    <?= $carrito_Cantidad ?>
                </span>
                <?php
            }
            ?>
           <img src="img/carrito.png">
        </a>
        <a href="reset-password.php" class="botones">❀ Cambia tu contraseña</a>
        <a href="cerrarConexion.php" class="botones">❀ Cierra la sesión</a>
        <?php
    }
    ?>


</div>



<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>