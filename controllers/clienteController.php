<?php
require_once("./models/Cliente.php");


class ClienteController{
    //atributos-propiedades
    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
    }
    
    //metodos
    public function listar(){
        $listado =$this->cliente->listAll();
        return $listado;
    }

    ///faltarian los otros metodos

}