<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formularios en PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label> 
            <input type="text" name="nombre"><br>
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos"><br>
            <label for="boton">Haz Click: </label>
            <input type="button" name="Botón" value="Aplazar Envío"><br>
            <label for="nacionalidad">Marca la celda correspodiente: </label>
            <p>
                Española <input type="checkbox" name="nacionalidad" value="Española" checked="true"><br>
                Extranjera <input type="checkbox" name="nacionalidad" value="Extranjera"><br>
            </p>
            <label for="boton">Elige tu color preferido: </label>
            <input type="color" name="color"><br>
            <label for="fecha">Selecciona la fecha: </label>
            <input type="date" name="fecha"><br>
            <label for="email">Escribe tu email: </label>
            <input type="email" name="email"><br>
            <label for="archivos">Sube tus archivos</label>
            <input type="file" name="archivos" multiple="true"><br>
            <label for="registro">Número de Registro: </label>
            <input type="number" name="registro"><br>
            <label for="clave">Contraseña</label>
            <input type="password" name="clave"><br>
            <label for="sexo">Sexo: </label>
            <p>
                Hombre <input type="radio" name="sexo" value="Hombre" checked="true"><br>
                Mujer <input type="radio" name="sexo" value="Mujer"><br>
            </p>
            <label for="paginaWeb">Página Web: </label>
            <input type="url" name="paginaWeb"><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

