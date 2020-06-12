<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Recibir Datos</title>
    </head>
    <body>
        <?php
        echo '<h1>'.$_POST['nombre'].' '.$_POST['apellidos'].'<h1>';
        var_dump($_POST);
        ?>
    </body>
</html>
