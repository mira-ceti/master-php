<?php
    $error = 'Faltan datos';
    
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) &&
            !empty($_POST['email']) && !empty($_POST['clave'])) {
        $error = 'OK';
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        
        if(strlen($clave) < 6) {
            $error = 'Clave no correcta';
        }
        if(!filter_var($edad, FILTER_VALIDATE_INT)) {
            $error = 'Edad no correcta';
        }
        if(!is_string($nombre)){
            $error = 'Nombre no correcto';
        }
        if(!is_string($apellidos)){
            $error = 'Apellidos no correctos';
        }
    }
    if ($error != 'OK') {
        header("Location:index.php?error=$error");
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procesamientod de Formularios en PHP</title>
    </head>
    <body>
        <h1>Procesando el formulario PHP</h1>
        <?php if($error == 'OK'):?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <?php endif;?>
        
    </body>
</html>

