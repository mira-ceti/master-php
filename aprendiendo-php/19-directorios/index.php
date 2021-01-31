<?php
if(!is_dir('Mis_Documentos')) {
    mkdir('Mis_Documentos', 0777) or die("No se puede crear la carpeta");
    echo "Carpeta Creada";
}
else {
    echo "La Carpeta  ya existe";
}

//rmdir('Mis_Documentos');

echo "<hr>";

//Lectura de Directorios
$gestor = opendir('./Mis_Documentos');
if($gestor) {
    echo "<h4>Contenido Carpeta</h4>";
    $archivo = readdir($gestor);
    while($archivo != null) {
        echo $archivo."<br>";
        $archivo = readdir($gestor);
    }
}