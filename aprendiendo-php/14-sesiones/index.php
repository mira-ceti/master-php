<?php

session_start();

$var_normal = "Soy una cadena de texto";

$_SESSION['var_session'] = "HOLA SOY UNA VARIABLE DE SESIÓN";

echo $var_normal."<br>";
echo $_SESSION['var_session'];
