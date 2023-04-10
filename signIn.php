<?php
$activo="";
require 'includes/funciones.php';
incluirTemplate('header', $activo);
?>
    <main>
        <h1>INICIO DE SESIÓN</h1>
        <form class = "formulario__cuenta">
            <fieldset>
                <legend>Crea tu cuenta</legend>
                <div class="formulario__cuenta--campos">

                <Div class = "formulario__cuenta--campo">
                    <Label>Correo</Label>
                    <input type="text" placeholder="tu nombre :)" id="nombre">
                </Div>
                <Div class = "formulario__cuenta--campo">
                    <label> Contraseña</label>
                    <input type="password" placeholder="contraseña" id="contraseña">
                </Div>

                    <input  class = "formulario__submit--cuenta" type="submit" value="ENVIAR">
                </div>
            </div> <!--CONTENEDOR-CAMPOS-->    
            </fieldset>

        </form>
    
    </main>


    <?php
    incluirTemplate("footer", $active="");
    ?>