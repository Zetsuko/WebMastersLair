<?php
require 'app.php';

function incluirTemplate( $nombre, $active = ""){
    $activo = $active; 
    include TEMPLATES_URL."/$nombre.php";
}

?>