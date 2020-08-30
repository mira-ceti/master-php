<?php

//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

setcookie("miGalleta", "Valor de mi galleta");

setcookie("unAnyo", "Solo va a durar un año", time()+(60*60*24*365));

header('Location:ver_cookies.php');
