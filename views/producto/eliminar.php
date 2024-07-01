<?php
    $clienteController = new ClienteController();
    $url = explode("/", $_GET["vista"]);
    //var_dump($datos)
        $clienteController->eliminar($url[2]);
        //redireccionar a la pagina del listado, inicio
        header("Location: ?vista=cliente/inicio");