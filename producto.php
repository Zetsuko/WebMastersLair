<?php
    $activo ="";
    require 'includes/funciones.php';
    incluirTemplate('header', $activo);
?>
    <main class="contenedor">
        <h1>Japanese folk metal Volumen 1</h1>

        <div class="disco">
            <img class="disco__imagen" src="img/JfmVol1.jpg">

            <div class="disco__contenido">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, delectus iusto. Sequi laborum itaque tempore error voluptatum corporis id, ducimus fuga atque magni odio, sint vitae illum porro praesentium blanditiis?</p>
            
                <form class="formulario">
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                    <input class="formulario__submit" type="submit" value="Agregar al carrito">
                </form>
            </div>
        </div>
    </main>

<?php
    incluirTemplate("footer", $active="");
    ?>