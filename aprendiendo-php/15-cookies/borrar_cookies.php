<?php

if(isset($_COOKIE['miGalleta'])){
    setcookie("miGalleta", "", time()-100);
}

header('Location:ver_cookies.php');

