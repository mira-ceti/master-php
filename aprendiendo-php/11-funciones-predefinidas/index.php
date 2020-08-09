<?php

$nombre = 'Isidro Bellón Cano';
var_dump($nombre);

echo date('d-m-yy');
echo "<br>";
echo time();
echo "<br>";
echo sqrt(7);
echo "<br>";
echo rand(10, 30);
echo "<br>";
echo pi();
echo "<br>";
echo round(pi(),4);
echo "<br>";
echo gettype($nombre);
echo "<br>";
if(isset($nombre)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}
echo "<br>";
$mi_titulo = ' Este es el primer Título     ';
echo var_dump(trim($mi_titulo));
echo "<br>";
unset($mi_titulo);
echo "<h1>".$mi_titulo."</h1>";
echo "<br>";
if(!empty($nombre)) {
    echo "La variable no está vacía o no es nula";
}
echo "<br>";
echo strlen($nombre);
echo "<br>";
$frase = 'La vida es bella';
echo strpos($frase, 'vida');
echo "<br>";
echo str_replace('a', 'e', $frase);