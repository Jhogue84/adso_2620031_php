<?php
require_once("./config/ConectorBd.php");
require_once("Proveedor.php");
require_once("Categoria.php");
class Producto
{
    //atributo-propiedades
    private $id;
    private $proveedor;
    private $categoria;
    private $descripcion;
    private $vrUnitario;
    private $stock;
    private $imagen;
    private $conectarse;
    //metodos-funciones

    public function __construct()
    {
        $this->conectarse = new ConectorBd();
        //$this->proveedor  = new Proveedor();
        //$this->categoria = new Categoria();
    }

    //getter y setter
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProveedor()
    {
        return $this->proveedor->getId();
    }

    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function getVrUnitario()
    {
        return $this->vrUnitario;
    }

    public function setVrUnitario($vrUnitario)
    {
        $this->vrUnitario = $vrUnitario;
    }
    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }
    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    //listar los datos
    public function listAll()
    {
        //$cadenaSql = "SELECT * FROM productos";    
        $cadenaSql = "SELECT pro.id, prv.nombre as proveedor, cat.nombre as categoria, descripcion, vrUnitario, stock, imagen FROM productos pro INNER JOIN proveedores prv ON pro.idProveedor = prv.id INNER JOIN categorias cat ON pro.idCategoria = cat.id";
        //echo $cadenaSql;
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = array();
        if ($resultado->num_rows > 0) {
            for ($i = 0; $i < $resultado->num_rows; $i++) {
                array_push($datos, $resultado->fetch_assoc());
            }
        }

        return $datos;
    }

    //create, upadete, delete
    public function create()
    {

        $cadenaSql = "INSERT INTO productos (idProveedor, idCategoria, descripcion, vrUnitario, stock, imagen) VALUES ($this->proveedor, $this->categoria, '$this->descripcion', $this->vrUnitario, $this->stock, '$this->imagen')";
        //echo $cadenaSql;
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

    public function listById()
    {
        $cadenaSql = "SELECT * FROM clientes WHERE id = $this->id";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = $resultado->fetch_assoc();
        return $datos;
    }
    /*
    public function update(){
        $cadenaSql ="UPDATE clientes SET numIdentificacion = '$this->numIdentificacion', idCategoria = '$this->idCategoria', descripcion = '$this->descripcion', vrUnitario = '$this->vrUnitario', stock ='$this->stock', imagen = '$this->imagen', imagen2 = '$this->imagen2', clave = '".  md5($this->clave) ."' WHERE id = $this->id";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }
    */
    public function delete()
    {
        $cadenaSql = "DELETE FROM clientes WHERE id = $this->id";
        //echo $cadenaSql . "<br>";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }
}
