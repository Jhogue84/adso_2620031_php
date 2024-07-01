<?php
$clienteController = new ClienteController();
$listadoClientes = $clienteController->listar();

?>
<h3>Listado de clientes</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Numero Identificacion</th>
            <th>Nombre Compania</th>
            <th>Nombre Contacto</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Telefono 2</th>
            <th>Clave</th>
            <th><a href="?vista=cliente/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadoClientes); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadoClientes[$i]); $j++): ?>
            <td><?php echo $listadoClientes[$i][$j];?></td>

            <?php endfor?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="?vista=cliente/editar/<?php echo $listadoClientes[$i][0]?>"
                    class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="?vista=cliente/eliminar/<?php echo $listadoClientes[$i][0]?>"
                    class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
        </tr>
        <?php endfor?>
    </tbody>
</table>