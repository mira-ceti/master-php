<?php

$archivo = fopen("fichero_texto.txt", "a+");

//Leer y Sacar contenido
echo "<h2>Contenido del archivo</h2>";
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

//Escribir
fwrite($archivo, "1. Lea el Tutorial PHP.");

fclose($archivo);

//Copiar archivo
copy('fichero_texto.txt', 'fichero_copia.txt') or die('Error al copiar');

//Renombrar
rename('fichero_copia.txt', 'fichero_copia.back') or die ('Error al renombrar');

//Borrar
unlink('fichero_copia.back') or die ('Error al borrar');

if(file_exists('fichero_textoS.txt')){
    echo "El fichero existe";
}
else {
    echo "El fichero NO EXISTE!!!";
}