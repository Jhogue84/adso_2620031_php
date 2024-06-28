<?php
require_once("./models/Cliente.php");
class SesionController{

    private $conectarse;
    public function __construct(){
        $this->conectarse = new ConectorBd();
    }

    function validarUsuario($numIdentificacion, $clave){
        $cliente = new Cliente();
        $cliente->setNumIdentificacion($numIdentificacion);
        $cliente->setClave($clave);
        $datos = $cliente->validateClient();
        return $datos;
    }

    public function iniciarSesion($datosUsuario, $perfil = "Perfil de Prueba"){
        session_start();
        $_SESSION["usuarioSesion"] = $datosUsuario["numIdentificacion"];
        $_SESSION["nombreCompania"] = $datosUsuario["nombreCompania"];
        $_SESSION["perfilSesion"] = $perfil;
        //$datosSesion = array("usuarioSesion" => $_SESSION["usuarioSesion"], "perfilSesion"=>$_SESSION["perfilSesion"]);
        return $_SESSION["usuarioSesion"];
    }

    public function cerrarSesion(){
        session_start();
        session_unset();
        session_destroy();
    }
    
}