<?php
    $clienteController = new ClienteController();
    $url = explode("/", $_GET["vista"]);
    $datos = $clienteController->listarPorId($url[2]);
    //var_dump($datos)

    if (isset($_POST["editar"])){
        echo "Preciono el boton editar";
        $id= $url[2];
        $numIdentificacion= $_POST["numIdentificacion"];
        $nombreCompania = $_POST["nombreCompania"];
        $nombreContacto = $_POST["nombreContacto"];
        $direccion = $_POST["direccion"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $telefono2 = $_POST["telefono2"];
        $clave = $_POST["clave"];

        $clienteController->editar($id, $numIdentificacion, $nombreCompania,$nombreContacto,$direccion,$email, $telefono, $telefono2, $clave);
        //redireccionar a la pagina del listado, inicio
        header("Location: ?vista=cliente/inicio");
    }

?>
<h3>Editar Cliente</h3>
<div class="row">
    <form class="col s12" method="post">

        <div class="row">
            <div class="input-field col s6">
                <input id="id" value="<?php echo $datos["id"] ?>" name="id" type="text" class="validate" required
                    disabled>
                <label for="id">Id</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="numIdentificacion" value="<?php echo $datos["numIdentificacion"] ?>" name="numIdentificacion"
                    type="text" class="validate" required>
                <label for="numIdentificacion">Numero de Identificacion</label>
            </div>
            <div class="input-field col s6">
                <input id="nombreCompania" value="<?php echo $datos["nombreCompania"] ?>" name="nombreCompania"
                    type="text" class="validate" required>
                <label for="nombreCompania">Nombre Compania</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="nombreContacto" value="<?php echo $datos["nombreContacto"] ?>" name="nombreContacto"
                    type="text" class="validate" required>
                <label for="nombreContacto">Nombre de Contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="direccion" value="<?php echo $datos["direccion"] ?>" name="direccion" type="text"
                    class="validate" required>
                <label for="direccion">Direccion del Cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" value="<?php echo $datos["email"] ?>" name="email" type="email" class="validate"
                    required>
                <label for="email ">Correo del Cliente</label>
            </div>
            <div class="input-field col s6">
                <input id="telefono" value="<?php echo $datos["telefono"] ?>" name="telefono" type="text"
                    class="validate" required>
                <label for="telefono ">Telefono del CLiente</label>
            </div>

        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="telefono2" value="<?php echo $datos["telefono2"] ?>" name="telefono2" type="text"
                    class="validate">
                <label for="telefono2">Telefono del Contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="clave" value="<?php echo $datos["clave"] ?>" name="clave" type="text" class="validate"
                    required>
                <label for="clave">Clave del CLiente</label>
            </div>
            <div class="col s6">
                <button class="btn green" type="submit" name="editar">Editar</button>
            </div>

        </div>
    </form>
</div>