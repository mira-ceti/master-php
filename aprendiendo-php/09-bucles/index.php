<?php

/* 
 BUCLES EN PHP
 */
$numero = 0;

while($numero <= 100) {
    echo "$numero";
    if($numero != 100) {
        echo ", ";
    }
    $numero++;
}
echo "<br>";

//Ejemplo Tabla Multiplicar
if(isset($_GET['numero'])){
    $numero = (int) $_GET['numero'];
}
else{
    $numero = 1;
}

//var_dump($numero);
echo "<h3> Tabla de multiplicar del número $numero</h3>";
$contador = 0;

while($contador <= 10) {
    if($numero == 19){
        echo "<h3>El número 19 no está permitido";
        break;
    }
    echo "$numero x $contador = ".($numero * $contador)."<br>";
    $contador++;
}

//Do While
echo "<br><br>";
$edad = 15;
$contador = 1;

do{
  echo "Tienes acceso al local privado $contador<br>";
  $contador++;
}while($edad >= 18 && $contador <= 10);

//For
echo "<br>";
$resultado = 0;

for($i=0; $i<=100; $i++){
    $resultado = $resultado + $i;
    echo "$resultado, ";
}

echo "<h3>El resultado de la suma de los 100 primeros números es $resultado</h3>";

