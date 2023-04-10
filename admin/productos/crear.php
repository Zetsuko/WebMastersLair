<?php

    require '../../includes/config/database.php';
    $db = conectarDB();

    require('../../includes/funciones.php');
    incluirTemplate('header', $active = '');

    //MENSAJES DE ERROR
    $errores = [];

    $nombre = '';
    $precio = '';
    $imagen = '';
    $descripcion = '';
    $marca ='';
    $tipo = '';
    $genero = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
        $precio = mysqli_real_escape_string($db, $_POST['precio']);
        $imagen = $_FILES['imagen'];
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
        $marca = mysqli_real_escape_string($db, $_POST['marca']);
        $tipo = mysqli_real_escape_string($db, $_POST['tipo']);
        $genero = mysqli_real_escape_string($db, $_POST['genero']);

        if (!$nombre) {
            $errores[] = "DEBES AÑADIR UN TITULO";
        }
        
        if (!$precio) {
            $errores[] = "DEBES AÑADIR UN PRECIO";
        }

        if(strlen($descripcion) > 255){
            $errores[] = "LIMITE DE CARACTERES SUPERADO, ESCRIBE UNA DESCRIPCIÓN MÁS BREVE";
        }

        if (!$marca) {
            $errores[] = "DEBES AÑADIR LA MARCA DEL PRODUCTO";
        }
        
        if (!$tipo) {
            $errores[] = "DEBES AÑADIR EL TIPO O DEPARTAMENTO DEL PRODUCTO";
        }

        if(!$genero){
            $errores[] = "DEBES AÑADIR SU GENERO";
        }

        if (!$imagen['name']) {
            $errores[]= 'LA IMAGEN ES OBLIGATORIA';
        }

        if (empty($errores)) {

            /*SUBIDA DE ARCHIVOS*/
            
            //CREAR CARPETA
            $carpetaImagenes = '../../imagenes/';

            if (!is_dir($carpetaImagenes)) {
             mkdir($carpetaImagenes);
            }

            //GENERAR NOMBRE ÚNICO
            $nombreImagen = md5(uniqid(rand(), true) ) . ".jpg";

            //subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );

        $query = " INSERT INTO productos (producto_nombre, producto_descripcion, producto_precio, producto_genero, producto_tipo, producto_marca, producto_imagen) VALUES 
        ('$nombre', '$descripcion','$precio','$genero','$tipo','$marca','$nombreImagen')";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /proyecto/admin?resultado=1');
        }

        }
    }

?>
    <main class ="contenedor">
    <h1>Nuevo Producto </h1>
    <a href="/proyecto/admin" class="boton">Regresar </a>
  
    <?php foreach ($errores as $error): ?>
        <div class= "error">
    <?php  echo $error;?>
        </div>
    <?php endforeach;?>

     <form class="formulario__crud" method="POST" action="crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="nombre" placeholder="Nombre Producto" value="<?php echo $nombre ?>">
        
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio" min="0" value="<?php echo $precio ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name= "imagen" accept="image/jpeg, image/png, image/jpg" value="<?php echo $imagen ?>">

            <label for="descripcion">Descripción:</label>
            <textarea id ="descripcion" name="descripcion" value="<?php echo $descripcion ?>"></textarea>
        </fieldset>
        <br>
        <fieldset>
            <legend>Información Producto</legend>
            
            <label for="marca">Marca Del Producto</label>
            <input type="text" id="marca" name="marca" placeholder="Marca Del Producto" value="<?php echo $marca ?>">

            <label for="tipo">Tipo de Producto</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Producto" value="<?php echo $tipo ?>">

            <label for="genero">Genero Del Producto</label>
            <input type="text" id ="genero" name="genero" placeholder="Genero del Producto (si es que tiene)" value="<?php echo $genero ?>">
        </fieldset>

        <input type="submit" value="Crear Producto" class="boton">
    </form>
    </main>


<?php
    incluirTemplate('footer', $active = '');

?>
