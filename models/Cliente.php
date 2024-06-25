<?php 
require_once("./config/ConectorBd.php");
class Cliente{
    //atributo-propiedades
    private $id;
    private $numIdentificacion;
    private $nombreCompania;
    private $nombreContacto;
    private $direccion;
    private $email;
    private $telefono;
    private $telefono2;
    private $clave;
    private $conectarse;
    //metodos-funciones

    public function __construct(){
        $this->conectarse = new ConectorBd();
    }
    
    //getter y setter
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getNumIdentificacion (){
        return $this->numIdentificacion;
    }

    public function setNumIdentificacion ($numIdentificacion){
        $this->numIdentificacion =$numIdentificacion ;
    }
    
    public function getNombreCompania(){
        return $this->nombreCompania;
    }

    public function setNombreCompania($nombreCompania){
        $this->nombreCompania=$nombreCompania;
    }
    public function getNombreContacto(){
        return $this->nombreContacto;
    }

    public function setNombreContacto($nombreContacto){
        $this->nombreContacto=$nombreContacto;
    }
    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getTelefono2(){
        return $this->telefono;
    }

    public function setTelefono2($telefono2){
        $this->telefono2=$telefono2;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setClave($clave){
        $this->clave=$clave;
    }

    //listar los datos
    public function listAll(){
        $cadenaSql = "SELECT * FROM clientes";    
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    //create, upadete, delete

    public function create(){
        $cadenaSql ="INSERT INTO clientes (numIdentificacion, nombreCompania, nombreContacto, direccion, email, telefono, telefono2, clave) VALUES ('$this->numIdentificacion', '$this->nombreCompania', '$this->nombreContacto', '$this->direccion', '$this->email', '$this->telefono', '$this->telefono2', '$this->clave')";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

}