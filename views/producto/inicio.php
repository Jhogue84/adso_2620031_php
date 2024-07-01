<?php
$productoController = new ProductoController();
$listadoProductos = $productoController->listar();
$rutaImg = "img/producto";
?>
<h3>Listado de Productos</h3>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Proveedor </th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Valor Unitario</th>
            <th>Stock</th>
            <th>Imagen</th>
            <?php if (isset($_SESSION["usuarioSesion"])) : ?>
            <th><a href="?vista=producto/crear" class="btn-floating green btn-small"><i
                        class="material-icons">add</i></a></th>
            <?php endif ?>
        </tr>
    </thead>
    <tbody>

        <?php for ($i = 0; $i < count($listadoProductos); $i++) : ?>
        <tr>
            <?php foreach ($listadoProductos[$i] as $clave => $valor) : ?>
            <td>
                <?php
                        if ($clave == "imagen") {
                            echo "<img src='$rutaImg/$valor' width='50px'>";
                        } else {
                            echo $valor;
                        }
                        ?>
            </td>

            <?php endforeach ?>
            <?php if (isset($_SESSION["usuarioSesion"])) : ?>
            <td><a href="" class="btn-floating blue btn-small"><i class="material-icons">visibility</i></a>
                <a href="?vista=producto/editar/<?php echo $listadoProductos[$i][0] ?>"
                    class="btn-floating orange btn-small"><i class="material-icons">edit</i></a>
                <a href="?vista=producto/eliminar/<?php echo $listadoProductos[$i][0] ?>"
                    class="btn-floating red btn-small"><i class="material-icons">delete</i></a>
            </td>
            <?php endif ?>
        </tr>
        <?php endfor ?>
    </tbody>
    </ttable