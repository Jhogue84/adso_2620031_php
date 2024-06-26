<?php

require_once("./config/Enrutador.php");
require_once("./controllers/clienteController.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Pagina Web Compras</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li><a href="index.php?vista=cliente/inicio">Lista de Clientes</a></li>

            </ul>
        </div>
    </nav>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        if(isset($_GET["vista"])){
            $enrutador->CargarVista($_GET["vista"]);
        }else{
            
    ?>

        <h4>Iniciar Sesion</h4>
        <div class="row">
            <form class="col s12" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="usuario" name="usuario" type="text" class="validate" required>
                        <label for="usuario">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="clave" name="clave" type="password" class="validate" required>
                        <label for="clave">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" name="iniciarSesion" class="btn green-ligth">Iniciar
                        Sesion</button>&nbsp;

                    <a href="?view=/registrar">Registrarse</a>

                </div>
            </form>
        </div>
        <?php
        }
   ?>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>