<?php

class Enrutador{

    //metodo-funcion
    public function CargarVista($vista){
        //echo $vista;//cliente/inicio
        $carpetaArchivo = explode("/",$vista);
        switch ($carpetaArchivo[1]) {
            case 'inicio':
               require_once("./views/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                break;
            case 'crear':
                require_once("./views/". $carpetaArchivo[0]. "/".$carpetaArchivo[1].".php");
                break;
            default:
            require_once("./views/pageNotFound.php");
                break;
        }

        


    }
    
}