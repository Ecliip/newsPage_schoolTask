<?php
session_start();
echo "
<header>
    <nav>
        <h1>Ilerna M07</h1>";
        if(isset($_SESSION['nombre'])) {
            echo "<h2>Has entrado como ".$_SESSION['nombre']."</h2>";
        }
// TODO: implement permissions when logged in;
        echo "<ul>
            <li><button class='button button-blue'><a href='/ilerna/index.php'>Inicio</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/usuario/usuarios.php'>Usuarios</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/noticias.php'>Ver Todas las noticias</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/usuario/form_usuario.php'>Crear usuario</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/noticia/nueva.php'>Crear noticias</a></button></li>
            <li><button class='button button-green'><a href='/ilerna/loguin.php'>Autorizarse</a></button></li>
        </ul>
    </nav>
</header>
";