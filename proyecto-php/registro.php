<?php

if(isset($_POST)) {
    require_once 'includes/conexion.php';
    
    $nombre = isset($_POST['nombre']) ? $_POST['nombre']: false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']: false;
    $email = isset($_POST['email']) ? $_POST['email']: false;
    $password = isset($_POST['password']) ? $_POST['password']: false;
    
    $errores = array();
    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
       $nombre_validado = true;
    }
    else {
        $nombre_validado = false;
        $errores['nombre'] = "Nombre no válido";
    }
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
       $apellidos_validado = true;
    }
    else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Apellidos no válidos";
    }
    
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $email_validado = true;
    }
    else {
        $email_validado = false;
        $errores['email'] = "Email no válido";
    }
    
    if(!empty($password)) {
       $password_validado = true;
    }
    else {
        $password_validado = false;
        $errores['password'] = "Password no válida";
    }
    
    $guardar_usuario = false;
    
    if(count($errores) == 0) {
        $guardar_usuario = true;
        
        //Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        } else {
             $_SESSION['errores']['general'] = "Fallo al guardar al usuario!!!";
        }
    }
    else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location: index.php');


