<?php

if(isset($_COOKIE['miGalleta'])){
    echo "<h2>".$_COOKIE['miGalleta']."</h2>";
}
else {
    echo "<h2>No existe la Cookie</h2>";
}

if(isset($_COOKIE['unAnyo'])){
    echo "<h2>".$_COOKIE['unAnyo']."</h2>";
}
else {
    echo "<h2>No existe la Cookie</h2>";
}
?>
<a href="index.php">Crear Cookies</a>
<br>
<a href="borrar_cookies.php">Borrar Cookies</a>