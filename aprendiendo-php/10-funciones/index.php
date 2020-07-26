<?php

/* 
 * FUNCIONES
 */

echo calculadora(13, 101);
echo calculadora(15, 103, true);
echo calculadora(17, 105, false);

function tabla($numero) {
    echo "<h3>Tabla de multiplicar del número: ".$numero."</h3>";
    
    for($i=1; $i<=10; $i++) {
        $operacion = $numero * $i;
        
        echo "$numero * $i = $operacion <br>";
    }
}

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}
else {
    echo "<h3> No hay número para multiplicar</h3>";
}

function calculadora($numero1, $numero2, $negrita = false) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $factor = $numero1 / $numero2;
    
    $cadenaTexto = "";
    
    if($negrita) {
        $cadenaTexto .= "<h2>";
    }
    
    $cadenaTexto .= "Suma: $suma <br>";
    $cadenaTexto .= "Resta: $resta <br>";
    $cadenaTexto .= "Producto: $producto <br>";
    $cadenaTexto .= "Factor: $factor <br>";
    
    if($negrita) {
        $cadenaTexto .= "</h2>";
    }
    return $cadenaTexto;
}

//Funciones Variables:
function saludar() {
    echo "<h3>Muy buenas, son las </h3>";
}

$saludo = "saludar";
echo $saludo();
