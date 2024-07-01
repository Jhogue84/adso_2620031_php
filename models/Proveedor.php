<?Php
require_once("./config/ConectorBD.php");

class Proveedor
{
    //atributos
    private $id;
    private $nombre;
    private $contacto;
    private $telefono;
    private $telefono2;
    private $conectarse; //para la conexion
    //metodos
    public function __construct()
    {
        $this->conectarse = new ConectorBd();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getContacto()
    {
        return $this->contacto;
    }

    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }


    //listar
    public function create()
    {
        //mejora para validar si el usuario existe.
        $cadenaSql = "SELECT * FROM proveedores WHERE nombre ='$this->nombre' AND contacto = '$this->contacto'";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        if ($resultado->num_rows != 0) {
            return false;
        } else {
            $cadenaSql = "INSERT INTO proveedores (nombre,contacto,telefono,telefono2) VALUES ('{$this->nombre}','$this->contacto','$this->telefono','$this->telefono2')";
            $this->conectarse->consultaSinRetorno($cadenaSql);
            return true;
        }
    }

    //eliminar
    public function delete()
    {
        $cadenaSql = "DELETE FROM proveedores WHERE ID=$this->id";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

    public function listById()
    {
        $cadenaSql = "SELECT * FROM proveedores where id = $this->id";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $fila = $resultado->fetch_assoc();
        $this->id = $fila["id"];
        $this->nombre = $fila["nombre"];
        $this->contacto = $fila["contacto"];
        $this->telefono = $fila["telefono"];
        $this->telefono2 = $fila["telefono2"];
        return $fila;
    }

    public function update()
    {
        $cadenaSql = "UPDATE proveedores SET nombre='$this->nombre', contacto='$this->contacto', telefono='$this->telefono',telefono2='$this->telefono2' WHERE id = $this->id";
        $this->conectarse->consultaSinRetorno($cadenaSql);
    }

    public function listAll()
    {
        $cadenaSql = "SELECT * FROM proveedores";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        $datos = array();
        if($resultado->num_rows > 0){
            for($i = 0; $i < $resultado->num_rows;$i++){
                array_push($datos, $resultado->fetch_assoc());
            }
        }    
        return $datos;
    }
}