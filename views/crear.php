<?php
$clienteController = new ClienteController();
//var_dump($_POST);
if(isset($_POST["registrar"])){
        
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
<h4>Resitro de Usuarios (cliente)</h4>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="numIdentificacion" name="numIdentificacion" type="text" class="validate" required>
                <label for="numIdentificacion">Numero de Identificacion</label>
            </div>
            <div class="input-field col s6">
                <input id="nombreCompania" name="nombreCompania" type="text" class="validate" required>
                <label for="nombreCompania">Nombre de la Compañia</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="nombreContacto" name="nombreContacto" type="text" class="validate" required>
                <label for="nombreContacto">Nombre de Contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="direccion" name="direccion" type="text" class="validate" required>
                <label for="direccion">Direccion de la Compañia</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email">Correo Electronico de la Compañia</label>
            </div>
            <div class="input-field col s6">
                <input id="telefono" name="telefono" type="text" class="validate">
                <label for="telefono">Telefono de la Compañia</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="telefono2" name="telefono2" type="text">
                <label for="telefono2">Telefono del contacto</label>
            </div>
            <div class="input-field col s6">
                <input id="email" name="email" type="email" class="validate" required>
                <label for="email">Correo Electronico de la Compañia</label>
            </div>
        </div>
        <div class="input-field col s6">
            <input id="clave" name="clave" type="text" class="validate">
            <label for="clave">Contaseña</label>
        </div>
        <div class="input-field col s6">
            <input id="clave2" name="clave2" type="text" class="validate">
            <label for="clave2">Repita la Contraseña</label>
        </div>
</div>
<div class="row">
    <button type="submit" name="registrar" class="btn blue">Registrar</button>&nbsp;<button class="btn orange"
        name="cancelar">Cancelar</button>
</div>
</form>
</div>