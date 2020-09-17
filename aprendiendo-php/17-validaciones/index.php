<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validación de Formularios en PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label> 
            <input type="text" name="nombre" required="true" pattern="[A-Za-z]+"><br>
            
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" required="true" pattern="[A-Za-z]+"><br>
            
            <label for="edad">Edad: </label>
            <input type="number" name="edad" required="true" pattern="[0-9]+"><br>
            
            <label for="email">Escribe tu email: </label>
            <input type="email" name="email" required="true"><br>
            
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" required="true"><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>


