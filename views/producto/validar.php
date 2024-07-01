<?php
$productoController = new ProductoController();
if (isset($_POST["crear"])) {
    //idProveedor, idCategoria, descripcion, vrUnitario, stock, imagen
    $idProveedor = $_POST["idProveedor"];
    $idCategoria = $_POST["idCategoria"];
    $descripcion = $_POST["descripcion"];
    $vrUnitario = $_POST["vrUnitario"];
    $stock = $_POST["stock"];
    //$imagen = $_POST["imagen"];
    //Datos de la imagen que se subira al servidor.
    $tamanioMax = 3000000; //3000kb - 3Mb
    $tmpImagen = $_FILES["imagen"]["tmp_name"];
    $nomImagen = $_FILES["imagen"]["name"];
    $tamanio = $_FILES["imagen"]["size"];
    $formato = strtolower(pathinfo($nomImagen, PATHINFO_EXTENSION));

    $ruta = "img/producto/";
    $fecha = date("dmY-Hms");

    //validando si selecciono una cateogoria y proveedor
    if ($idCategoria !== 0 and $idProveedor !== 0) {
        //validando el formato del archivo, tamaño y dandole un nombre y ruta para subir.
        if ($formato == "jpeg" || $formato == "jpg" || $formato == "png") {
            if ($tamanio > $tamanioMax) {
                echo "El archivo no debe pesar mas de 3 Mb";
            } else {
                $imagen = $fecha . "." . $formato;
                echo $ruta;
                //insertar en la base de datos
                $productoController->crear($idProveedor, $idCategoria, $descripcion, $vrUnitario, $stock, $imagen);
                //subida al servidor
                if (move_uploaded_file($tmpImagen, "$ruta/$imagen")) {
                    echo "se guardo exitosamente";
                    header("Location: ?vista=producto/inicio");
                } else {
                    echo "error de carga";
                }
            }
        } else {
            echo "El archivo seleccionado no es el correcto";
        }


        //
        //redireccionar a la pagina del listado, inicio
        //header("Location: ?vista=producto/inicio");

    } else {
        echo "<br>Debe Seleccionar un proveedor y una categoria";
    }
}
?>
<img src="./img/producto/Monticomorpha.jpeg" alt="">