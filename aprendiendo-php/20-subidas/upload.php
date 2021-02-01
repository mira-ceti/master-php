<?php

$archivo = $_FILES['archivo'];
//var_dump($archivo);
//die();
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png'
        || $tipo == 'image/git') {
    
    if(!is_dir('images')) {
        mkdir('images', 0777);
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    header("Refresh: 5; URL=index.php");
    echo '<h2>Imagen subida correctamente</h2>';
    
}
else {
    header("Refresh: 5; URL=index.php");
    echo "<h2>Suba una imagen con formato correcto...</h2>";
}
