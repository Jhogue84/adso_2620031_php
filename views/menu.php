<nav class="colorSena">
    <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Bienvenido
            <?php echo $_SESSION["usuarioSesion"] . " " . $_SESSION["perfilSesion"]?></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a href="index.php?vista=cliente/inicio">Clientes</a></li>
            <li><a href="index.php?vista=producto/inicio">Productos</a></li>
            <li><a href="index.php?vista=proveedor/inicio">Proveedores</a></li>
            <li><a href="?vista=/logout">Cerrar Sesion</a></li>

        </ul>
    </div>
</nav>