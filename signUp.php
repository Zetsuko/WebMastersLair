<?php
$activo="";
require 'includes/funciones.php';
incluirTemplate('header', $activo);
?>

    <main class = "contenedor">
        <h1>CREAR CUENTA</h1>
        
        <form class = "formulario__cuenta">
            <fieldset>
                <legend>Crea tu cuenta</legend>
                <div class="formulario__cuenta--campos">

                <Div class = "formulario__cuenta--campo">
                    <Label>Nombre</Label>
                    <input type="text" placeholder="tu nombre :)" id="nombre">
                </Div>

                <div class = "formulario__cuenta--campo">
                    <label>Apellido</label>
                    <input type="text" placeholder="tu telefóno baby" id="apellido">
                </div>

                <div class="formulario__cuenta--campo">
                <label> Correo</label>
                <input type="text" placeholder="tu mail bb" id="email">
                </div>
                
                <div class="formulario__cuenta--campo">
                <label> Contraseña</label>
                <input type="text" placeholder="tu mail bb" id="contraseña">
                </div>
                <div>
                    <input  class = "formulario__submit--cuenta" type="submit" value="ENVIAR">
                </div>
            </div> <!--CONTENEDOR-CAMPOS-->    
            </fieldset>

        </form>
    </main>

    <?php
    incluirTemplate("footer", $active="");
    ?>