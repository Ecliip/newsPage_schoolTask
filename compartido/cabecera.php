<?php
session_start();
echo "
<header class='header'>
    <nav>
        <h1>Ilerna M07</h1>";
        if(isset($_SESSION['nombre'])) {
            echo "<h2>Has entrado como ".$_SESSION['nombre']."</h2>";
        } else {
            echo "<h2>Has entrado como huésped</h2>";
        }
        echo "<ul class='nav'>
            <li><button class='button button-blue'><a href='/ilerna/index.php'>Inicio</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/usuario/usuarios.php'>Usuarios</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/noticia/noticias.php'>Ver Todas las noticias</a></button></li>";
            if(isset($_SESSION['nombre'])) {
                echo    "<li><button class='button button-green'><a href='/ilerna/usuario/form_usuario.php'>Crear usuario</a></button></li>
                        <li><button class='button button-green'><a href='/ilerna/noticia/nueva.php'>Crear noticias</a></button></li>
                        <li><button class='button button-red'><a href='/ilerna/usuario/logout.php'>Salir</a></button></li>";
            } else {
                echo "<li><button class='button button-green'><a href='/ilerna/loguin.php'>Autorizarse</a></button></li>";
            }

        echo "</ul>
    </nav>
</header>
";