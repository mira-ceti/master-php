<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

function borrarErrores(){     
    $borrado = false;
    //borra errores de registrate registro.php
    if(isset($_SESSION['errores'])){
          $_SESSION['errores'] = null;
          $borrado = true;
    }
    return $borrado;
}
