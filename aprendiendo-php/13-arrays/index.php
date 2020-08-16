<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$peliculas = array('Superman', 'Batman', 'Spiderman');
var_dump($peliculas);
var_dump($peliculas[2]);

$cantantes = ['Frank Sinnatra', 'Barbara Streisand', 'Jeams Deen'];
var_dump($cantantes);

$personas = array(
  'nombre' => 'Isidro Bellón',
  'email' => 'isidro.bellon@gmail.com',
  'localidad' => 'Villanueva de la Torre'
);
var_dump($personas);

$contactos = array(
  array(
      'nombre'=> 'Antonio',
      'email'=> 'antonio@yopmail.com',
  ),
  array(
      'nombre'=> 'Elena',
      'email'=> 'elena@yopmail.com',
  ),
  array(
      'nombre'=> 'Maribel',
      'email'=> 'maribel@yopmail.com',
  ),
);
var_dump($contactos);

echo $peliculas[1].'<br>';
echo $cantantes[1].'<br>';

echo '<h1>Listado de Películas</h1>';
for($i = 0; $i < count($peliculas); $i++) {
    echo '<h3>'.$peliculas[$i].'</h3>';
}
echo '<br>';

echo '<h1>Listado de Cantantes</h1>';
foreach ($cantantes as $cantante) {
    echo '<h3>'.$cantante.'</h3>';
}
echo '<br>';

echo '<h1>Listado de Personas</h1>';
foreach($personas as $persona) {
    echo '<h3>'.$persona.'</h3>';
}

echo '<h1>Listado de Contactos</h1>';
foreach ($contactos as $nombre) {
    echo '<h3>'.$nombre['nombre'].' '.$nombre['email'].'</h3>';
}
