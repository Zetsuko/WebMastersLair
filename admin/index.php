<?php
    require('../includes/funciones.php');
    incluirTemplate('header', $active = '');


    $resultado = $_GET['resultado'] ?? null;

?>
    <main class ="contenedor">
    <h1>Aministrador de tienda </h1>
    <?php if ($resultado === 1):?> 
        <p> Producto Agregado Correctamente</p>
    <?php endif ?>

    <div class = "admin">
    <a class="admin__boton" href="/proyecto/admin/productos/crear.php" class="boton">Nuevo Producto </a>
    <a class="admin__boton" href="/proyecto/admin/productos/actualizar.php" class="boton">Actualizar Producto</a></main>
    </div>
<?php
    incluirTemplate('footer', $active = '');

?>