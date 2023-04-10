<?php
    $activo ="contacto";
    require 'includes/funciones.php';
    incluirTemplate('header', $activo);?>
    <main class="contenedor">
        <h1>Contacto</h1>
        <form class = "formulario__contacto">
            <fieldset>
                <legend>CONTACTANOS NO TE HAREMOS CASO PERO MINIMO PARA QUE PIERDA TU TIEMPO</legend>
                <div class="formulario__contacto--campos">
                <Div class = "formulario__contacto--campo">
                    <Label>Nombre</Label>
                    <input class="input-text" placeholder="tu nombre :)">
                </Div>

                <div class = "formulario__contacto--campo">
                    <label>Telefóno</label>
                    <input class="input-text" placeholder="tu telefóno baby">
                </div>

                <div class="formulario__contacto--campo">
                <label> Correo</label>
                <input class ="input-text" placeholder="tu mail bb">
                </div>

                <div class="formulario__contacto--campo textarea">
                    <label>Mensaje</label>
                    <textarea class="input-text" placeholder="Escribele algo no seas amargado"></textarea>
                </div>
                
                <div>
                    <input  class = "formulario__submit--contacto" type="submit" value="ENVIAR">
                </div>
            </div> <!--CONTENEDOR-CAMPOS-->    
            </fieldset>

        </form>
    </main>

    <?php
    incluirTemplate("footer", $active="");
    ?>