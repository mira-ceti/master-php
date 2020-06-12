<?php
    define('NOMBRE', 'Isidro Bellón');
    define('WEB_SITE', 'www.ibc.com');
    
    echo '<h1>'.NOMBRE.'</h1>';
    echo '<h2>'.WEB_SITE.'</h2>';
    
    echo __FUNCTION__.' 1<br>';
    echo __DIR__.' 2<br>';
    echo __FILE__.' 3<br>';
    echo __METHOD__.' 4<br>';
    echo __NAMESPACE__.' 5<br>';
    
    echo PHP_WINDOWS_NT_WORKSTATION.' 6<br>';
    
?>
