<?php
    require_once("./controllers/sesionController.php");
    $sesionController = new SesionController();
    if(isset($_POST["iniciarSesion"])) {
        
        $numIdentificacion = $_POST["numIdentificacion"];
        $clave = $_POST["clave"];

        
        $usuario = $sesionController->validarUsuario($numIdentificacion, $clave);
        
        if($usuario != null){
            $datosSesion = $sesionController->iniciarSesion($usuario);
           // var_dump($datosSesion);
           header("Location: ?vista=/inicio");
           
        }
        else{
            echo "Usuario y/o Contraseña Incorrectos";
        }
        
    }
?>
<h4>Iniciar Sesion</h4>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="numIdentificacion" name="numIdentificacion" type="text" class="validate" required>
                <label for="numIdentificacion">Numero de Identificacion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="clave" name="clave" type="password" class="validate" required>
                <label for="clave">Contraseña</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                select para el perfil
            </div>
        </div>

        <div class="row">
            <button type="submit" name="iniciarSesion" class="btn green-ligth">Iniciar
                Sesion</button>&nbsp;
            <a href="?vista=/crear">Registrarse</a>
        </div>
    </form>
</div>