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

    public function crear($numIdentificacion, $nombreCompania,$nombreContacto,$direccion,$email, $telefono, $telefono2,
    $clave){
        $this->cliente->setNumIdentificacion($numIdentificacion);
        $this->cliente->setNombreCompania($nombreCompania);
        $this->cliente->setNombreContacto($nombreContacto);
        $this->cliente->setDireccion($direccion);
        $this->cliente->setEmail($email);
        $this->cliente->setTelefono($telefono);
        $this->cliente->setTelefono2($telefono2);
        $this->cliente->setClave($clave);

        $this->cliente->create();
        
    }

    public function listarPorId($id){
        $this->cliente->setId($id);
        $listado =$this->cliente->listById();
        return $listado;
    }

    public function editar($id, $numIdentificacion, $nombreCompania,$nombreContacto,$direccion,$email, $telefono, $telefono2, $clave){
        $this->cliente->setId($id);
        $this->cliente->setNumIdentificacion($numIdentificacion);
        $this->cliente->setNombreCompania($nombreCompania);
        $this->cliente->setNombreContacto($nombreContacto);
        $this->cliente->setDireccion($direccion);
        $this->cliente->setEmail($email);
        $this->cliente->setTelefono($telefono);
        $this->cliente->setTelefono2($telefono2);
        $this->cliente->setClave($clave);

        $this->cliente->update();
    }

}