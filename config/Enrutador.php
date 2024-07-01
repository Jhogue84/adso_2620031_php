<?php

class Enrutador
{

    //metodo-funcion
    public function CargarVista($vista, $sesion)
    {

        $carpetaArchivo = explode("/", $vista);
        //var_dump($carpetaArchivo);
        switch ($carpetaArchivo[1]) {
            case 'inicio':
                if ($sesion != null || $sesion != "") {
                    require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                } else {
                    if ($carpetaArchivo[0] == "producto") {
                        require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                    } else {
                        echo "NO tiene acceso, debe iniciar sesion";
                    }
                }
                break;
            case 'crear':
                if ($sesion != null || $sesion != "") {
                    require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                } else {
                    if ($carpetaArchivo[0] == "") {
                        require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                    } else {
                        echo "NO tiene acceso, debe iniciar sesion";
                    }
                }
                break;
            case 'editar':
                if ($sesion != null || $sesion != "") {
                    require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                } else {
                    echo "NO tiene acceso, debe iniciar sesion";
                }
                break;
            case 'eliminar':

                if ($sesion != null || $sesion != "") {
                    require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                } else {
                    echo "NO tiene acceso, debe iniciar sesion";
                }

                break;
            case 'login':
                require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            case 'logout':

                if ($sesion != null || $sesion != "") {
                    require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                } else {
                    echo "NO tiene acceso, debe iniciar sesion";
                }

                break;
            case "validar":
                require_once("./views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            default:
                require_once("./views/pageNotFound.php");
                break;
        }
    }
}
