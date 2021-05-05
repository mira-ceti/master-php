<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Blog de Viedojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO -->
            <div id="logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>
            
            <!-- MENÚ -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoría 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre mí</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div id="contenedor">
            <!-- BARRA LATERAL -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identifícate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" value="Entrar"/>
                    </form>
                </div>
                
                <div id="register" class="bloque">
                    <h3>Regístrate</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre"/>
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>
                        
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        
                        <input type="submit" value="Registrar"/>
                    </form>
                </div>
            </aside>
            
            <!-- CUERPO PRINCIPAL -->
            <div id="principal">
                <h1>Últimas entradas</h1>
                <article class="entrada">
                    <h2>Título de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam facilisis tincidunt ante, tincidunt ullamcorper dui dictum at.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam facilisis tincidunt ante, tincidunt ullamcorper dui dictum at.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam facilisis tincidunt ante, tincidunt ullamcorper dui dictum at.
                    </p>
                    <h2>Título de mi entrada</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Nam facilisis tincidunt ante, tincidunt ullamcorper dui dictum at.
                    </p>
                </article>
            </div>
        </div>
        
        <!-- PIE DE PÁGINA -->
        <footer id="pie">
            <p>Desarrolado por Isidro Bellón &copy; 2021</p>
        </footer>
        
    </body>
</html>
