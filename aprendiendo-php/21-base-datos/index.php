<?php

$conexion = mysqli_connect("127.0.0.1", "root", "", "blog_master", "3307");

if(mysqli_connect_errno()) {
    echo "<h3>Error al conectar con la BBDD ".mysqli_connect_error()."<h3>";
}
else {
    echo "<h1>Conexión realizada correctamente</h1>";
}

//Consulta para sacar formatos con carácteres extraños ñs y acentos:
$conexion -> set_charset("utf8");

//Consulta Normal:

$sql = "INSERT INTO usuarios VALUES (NULL, 'Alonso', 'Sánchez Pertierra', 'alonsanchez@gmail.com', '123456', '2020-03-12')";
utf8_encode($sql);
$insert = mysqli_query($conexion, $sql);

if($insert) {
    echo "<h1>Datos insertados correctamente</h1>";
}
else {
    echo "<h3>Error al insertar: ".mysqli_error($conexion)."</h3>";
}

$query = mysqli_query($conexion, "SELECT * FROM usuarios");

while ($row = mysqli_fetch_assoc($query)) {
    echo "<h3>".$row['nombre']." ".$row['apellidos']."</h3>";
}
    

        
