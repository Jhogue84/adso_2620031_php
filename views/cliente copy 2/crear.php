<?php
    $clienteController = new ClienteController();
    if(isset($_POST["crear"])){
        
        $numIdentificacion= $_POST["numIdentificacion"];
        $nombreCompania = $_POST["nombreCompania"];
        $nombreContacto = $_POST["nombreContacto"];
        $direccion = $_POST["direccion"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $telefono2 = $_POST["telefono2"];
        $clave = $_POST["clave"];

        $clienteController->crear($numIdentificacion, $nombreCompania,$nombreContacto,$direccion,$email, $telefono, $telefono2,
        $clave);
        echo "Se creo el cliente con exito.";
        //redireccionar a la pagina del listado, inicio
        header("Location: ?vista=cliente/inicio");

    }

?>
<h3>Crear nuevo Cliente</h3>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="numIdentificacion" name="numIdentificacion" type="text" class="validate" required>
                <label for="numIdentificacion">Numero de Identificacion</label>
            </div>
            <div class="input-field col s6">
                <input id="nombreCompania" name="nombreCompania" type="text" class="validate" required>
                <label for="nombreCompania">Nombre Compania</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="nombreContacto" name="nombreContacto" type="text" class="validate" required>
                <label for="nombreContacto">Nombre de Contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="direccion" name="direccion" type="text" class="validate" required>
                <label for="direccion">Direccion del Cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email ">Correo del Cliente</label>
            </div>
            <div class="input-field col s6">
                <input id="telefono" name="telefono" type="text" class="validate" required>
                <label for="telefono ">Telefono del CLiente</label>
            </div>

        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="telefono2" name="telefono2" type="text" class="validate">
                <label for="telefono2">Telefono del Contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="clave" name="clave" type="text" class="validate" required>
                <label for="clave">Clave del CLiente</label>
            </div>
            <div class="col s6">
                <button class="btn green" type="submit" name="crear">Crear</button>
            </div>

        </div>
    </form>
</div>