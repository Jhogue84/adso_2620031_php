<?php
session_start();
require_once("./config/Enrutador.php");
require_once("./controllers/sesionController.php");
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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php 
            if(isset($_SESSION["usuarioSesion"])){
                require_once("./views/menu.php");
            }else{
                require_once("./views/menu2.php");
            }
            
           
        ?>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        if(isset($_GET["vista"])){
            
            $enrutador->CargarVista($_GET["vista"]);
        }else{
            
    ?>
        <p>Pagina sin iniciar sesion, para todos los usuarios</p>

        <?php
        }
   ?>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./js/miScript.js"></script>
</body>

</html>