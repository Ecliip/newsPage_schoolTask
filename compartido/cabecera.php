<?php
session_start();
echo "
<header class='header'>
    <nav>
        <div class='nav-top-level'>
            <h1 class='logo'>Ilerna M07</h1>";
            if(isset($_SESSION['nombre'])) {
                echo "<h2>Has entrado como ".$_SESSION['nombre']."</h2>";
            } else {
                echo "<h2>Has entrado como huésped</h2>";
            }
        echo "</div>
        
        <ul class='nav'>
            <li><a class='nav-link' href='/ilerna/index.php'>Inicio</a></li>
            <li><a class='nav-link' href='/ilerna/usuario/usuarios.php'>Usuarios</a></li>
            <li><a class='nav-link' href='/ilerna/noticia/noticias.php'>Ver Todas las noticias</a></li>";
            if(isset($_SESSION['nombre'])) {
                echo    "<li><a  class='nav-link' href='/ilerna/usuario/form_usuario.php'>Crear usuario</a></li>
                        <li><a  class='nav-link' href='/ilerna/noticia/nueva.php'>Crear noticias</a></li>
                        <li><a  class='nav-link' href='/ilerna/usuario/logout.php'>Salir</a></li>";
            } else {
                echo "<li><button class='button button-green'><a href='/ilerna/loguin.php'>Autorizarse</a></button></li>";
            }

        echo "</ul>
    </nav>
</header>
";