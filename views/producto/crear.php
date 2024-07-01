<?php
//$productoController = new ProductoController();
$proveedor = new Proveedor();
$categoria = new Categoria();

$listaProveedores = $proveedor->listAll();
$listaCategorias = $categoria->listAll();

?>
<h3>Crear nuevo Producto</h3>
<div class="row">
    <form class="col s12" method="post" action="?vista=producto/validar" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s12 m6">
                <select name="idProveedor">
                    <option value="0">Proveedor</option>
                    <?php foreach ($listaProveedores as $proveedor) : ?>
                        <option value="<?php echo $proveedor["id"] ?>"><?php echo $proveedor["nombre"] ?></option>
                    <?php endforeach ?>
                </select>
                <label for="idProveedor">Proveedor</label>
            </div>
            <div class="input-field col s12 m6">
                <select name="idCategoria">
                    <option value="0">Categoria</option>
                    <?php foreach ($listaCategorias as $categoria) : ?>
                        <option value="<?php echo $categoria["id"] ?>"><?php echo $categoria["nombre"] ?></option>
                    <?php endforeach ?>
                </select>
                <label for="idCategoria">Categoria</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="descripcion" name="descripcion" type="text" class="validate" required>
                <label for="descripcion">Descripcion</label>
            </div>
            <!--idProveedor, idCategoria, descripcion, vrUnitario, stock, imagen-->
            <div class="input-field col s12 m6">
                <input id="vrUnitario" name="vrUnitario" type="number" class="validate" required>
                <label for="vrUnitario">Valor Unitario</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="stock" name="stock" type="number" class="validate" required>
                <label for="stock ">Stock</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field s12 m6">
                <div class="btn">
                    <span>Seleccione una Imagen</span>
                    <input type="file" name="imagen" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="imagen" placeholder="Carga la imagen">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <button class="btn green" type="submit" name="crear">Crear</button>
            </div>

        </div>
    </form>
</div>