<?php
session_start();
require_once("./config/Enrutador.php");
require_once("./controllers/sesionController.php");
require_once("./controllers/clienteController.php");
require_once("./controllers/productoController.php");
//require_once("./controllers/proveedorController.php");
//require_once("./controllers/categoriaController.php");
?>
<!DOCTYPE html>
<html lang="es">

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
    if (isset($_SESSION["usuarioSesion"])) {
        require_once("./views/menu.php");
        //echo "existe session";
    } else {
        require_once("./views/menu2.php");
        //echo "no hay sesion";
    }
    ?>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        //validar si existe la vista y existe sesion
        if (isset($_SESSION["usuarioSesion"])) {
            if (isset($_GET["vista"])) {
                //echo "<p>pagina con sesion, y con vista</p>";
                $enrutador->CargarVista($_GET["vista"], $_SESSION["usuarioSesion"]);
            } else {
                //echo "<p>pagina con sesion, y sin vista</p>";
            }
        } else {
            if (isset($_GET["vista"])) {
                //echo "<p>pagina sin sesion, pero con vista</p>";
                $enrutador->CargarVista($_GET["vista"], null);
            } else {
                echo "<p class='flow-text'>Pagina de inicio principal para todos los usuarios sin iniciar sesion</p>";
            }
        }
        ?>
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="./js/miScript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elems = document.querySelectorAll("select");
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>