<?php

$entero = 100;
$decimal = 23.76;
$texto = "Cadena de Texto";
$nulo;
$otro_texto = "Otro texto $texto";
$otro_texto2 = 'Otro texto '.$otro_texto;

$mi_nombre[] = "Isidro";
$mi_nombre[] = "Isidro";

echo gettype($entero).'<br>';
echo gettype($decimal).'<br>';
echo gettype($texto).'<br>';
echo gettype($nulo).'<br>';

echo var_dump($mi_nombre).'<br>';

echo $otro_texto.'<br>';
echo $otro_texto2.'<br>';
?>

