<?php

$cantantes = ['Frank Sinnatra', 'Barbara Streisand', 'Jeams Deen', 'Charles Aznavour'];
asort($cantantes);
var_dump($cantantes);
arsort($cantantes);
var_dump($cantantes);

$numeros = [11,17,2,3,37,12,7,1];
sort($numeros);
var_dump($numeros);

$cantantes[] = 'Nino Bravo';
$cantantes[] = 'Adamo';
var_dump($cantantes);

array_push($cantantes, 'Tino Casal');
var_dump($cantantes);

array_pop($cantantes);
var_dump($cantantes);

unset($cantantes[2]);
var_dump($cantantes);

echo "<h3>".$cantantes[array_rand($cantantes)]."</h3>";

var_dump(array_reverse($numeros));

var_dump(array_search('Barbara Streisand', $cantantes));

echo "<h4>".count($cantantes)." = ".sizeof($cantantes)."</h4>";