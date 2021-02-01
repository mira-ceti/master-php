<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subir Archivos PHP</title>
    </head>
    <body>
        <h1>Subir Imágenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" name="Enviar">
        </form>
        
        <h1>Listado de Imágenes</h1>
        <?php
            $gestor = opendir('./images');
            
            if($gestor) {
                while (($image = readdir()) != false){
                    if($image != '.' && $image != '..'){
                        echo "<img src='./images/$image' width='200px'><br>";
                    }
                }
            }
        ?>
    </body>
</html>

