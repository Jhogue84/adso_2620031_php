<?php
    require_once("./controllers/sesionController.php");
    
    $sesionController = new SesionController();
    $sesionController->cerrarSesion();
    header("Location: index.php");