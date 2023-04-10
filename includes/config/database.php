<?php

function conectarDB(): mysqli{
  $db = mysqli_connect('localhost', 'root', '', 'tienda_online');
    if (!$db) {
        echo "error no se pudo conectar";
        exit;
    }
    return $db;
}

?>