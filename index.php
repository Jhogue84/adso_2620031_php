<?php

require_once("./config/Enrutador.php");
require_once("./controllers/clienteController.php");


//recibir por get la ruta

$enrutador = new Enrutador();
if(isset($_GET["vista"])){
    $enrutador->CargarVista($_GET["vista"]);
}else{
    echo "Me carga el index principal";
}





//echo "<br>index.php archivo";