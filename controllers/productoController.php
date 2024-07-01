<?php
require_once("./models/producto.php");

class ProductoController{
    //atributos-propiedades
    private $producto;

    public function __construct(){
        $this->producto = new Producto();
    }
    
    //metodos
    public function listar(){
        $listado =$this->producto->listAll();
        return $listado;
    }

    public function crear($idProveedor, $idCategoria, $descripcion, $vrUnitario, $stock, $imagen){
        $this->producto->setProveedor($idProveedor);
        $this->producto->setCategoria($idCategoria);
        $this->producto->setDescripcion($descripcion);
        $this->producto->setVrUnitario($vrUnitario);
        $this->producto->setStock($stock);
        $this->producto->setImagen($imagen);

        $this->producto->create();
        
    }

    public function validarFormatoImagen($formato){
        if($formato == "jpg" || $formato == "jpeg" || $formato == "png"){
            return true;
        }else return false;
    }
/*
    public function listarPorId($id){
        $this->producto->setId($id);
        $listado =$this->producto->listById();
        return $listado;
    }

    public function editar($id, $numIdentificacion, $nombreCompania,$nombreContacto,$direccion,$email, $telefono, $telefono2, $clave){
        $this->producto->setId($id);
        $this->producto->setNumIdentificacion($numIdentificacion);
        $this->producto->setNombreCompania($nombreCompania);
        $this->producto->setNombreContacto($nombreContacto);
        $this->producto->setDireccion($direccion);
        $this->producto->setEmail($email);
        $this->producto->setTelefono($telefono);
        $this->producto->setTelefono2($telefono2);
        $this->producto->setClave($clave);

        $this->producto->update();
    }

    public function eliminar($id){
        $this->producto->setId($id);
        $this->producto->delete();
    }
*/
}