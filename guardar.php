<?php
    $nombre = $_POST['nombre'];
    $coment = $_POST['comentarios'];

    //crear fichero de texto
    // a -> crea fichero y añade al final                  r-> leer el fichero                  w-> crea fichero y lo reescribe si existe
    $fp = fopen('datos.txt', 'a');
    fclose($fp);
?>