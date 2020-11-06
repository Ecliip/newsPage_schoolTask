<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}


function addUser() {
    global $conn;
    $usuario = array(
        "nombre" => $_POST['nombre'],
        "password" => $_POST['password'],
        "email" => $_POST['email'],
        "edad" => $_POST['edad'],
        "f_nacimiento" => $_POST['f_nacimiento'],
        "direccion" => $_POST['direccion'],
        "c_postal" => $_POST['c_postal'],
        "provincia" => $_POST['provincia'],
        "genero" => $_POST['genero']
    );




    $sql = "insert into `usuarios`(
    `nombre`, 
    `contrasena`, 
    `email`, 
    `edad`, 
    `f_nacimiento`, 
    `direccion`,
     `c_postal`,
     `provincia`,
     `genero`) 
     values(
     '$usuario[nombre]',
     '$usuario[password]',
     '$usuario[email]',
     '$usuario[edad]',
     '$usuario[f_nacimiento]',
     '$usuario[direccion]',
     '$usuario[c_postal]',
     '$usuario[provincia]',
     '$usuario[genero]'
     )";

    if ($conn->query($sql) === TRUE) {
        echo("El valor se ha introducido con exito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function updateUser() {
    global $conn;
    $usuario = array(
        "nombre" => $_POST['nombre'],
        "password" => $_POST['password'],
        "email" => $_POST['email'],
        "edad" => $_POST['edad'],
        "f_nacimiento" => $_POST['f_nacimiento'],
        "direccion" => $_POST['direccion'],
        "c_postal" => $_POST['c_postal'],
        "provincia" => $_POST['provincia'],
        "genero" => $_POST['genero']
    );
//    $_SESSION['user_id'];

    $sql = "update `usuarios` 
        set 
        `nombre` = '$usuario[nombre]', 
        `contrasena` = '$usuario[password]', 
        `email` = '$usuario[email]', `edad` = 
        '$usuario[edad]', `f_nacimiento` = '$usuario[f_nacimiento]', 
        `direccion` = '$usuario[direccion]', `c_postal` = '$usuario[c_postal]',
        `provincia` = '$usuario[provincia]', `genero` = '$usuario[genero]' 
        where `id` = '$_GET[id]'";

    if ($conn->query($sql) === TRUE) {
        echo("El usuario ha sido modificado con éxito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function deleteUser() {
    global $conn;
    $sql = "delete from `usuarios` where `id` = '$_GET[id]'";

    if ($conn->query($sql) === TRUE) {
        echo("El usuario se ha eliminado con éxito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function loggin() {
    global $conn;
    $sql = "select * from `usuarios` where `email` = '$_GET[email]' and `contrasena` = '$_GET[password]'";

    $result = $conn -> query($sql);
    if (!$result) die("User not found");
    elseif ($result->num_rows) {
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        session_start();
        $_SESSION['nombre'] = $row[2];
        $_SESSION['id_usuario'] = $row[0];
//        print_r($row);

    }


}

function addLike() {
    global $conn;
    $sql = "update `noticias`
        set
        `likes` = '$_GET[likes]'
        where `id` = '$_GET[id]'";
    if ($conn->query($sql) === TRUE) {
        echo("se ha añadido un like");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function getUsers() {}

function addArticle() {
    global $conn;
    $noticia = array(
        "titulo" => $_POST['titulo'],
        "contenido" => $_POST['contenido'],
        "autor" => $_POST['autor']
    );
    $sql = "insert into `noticias`(
    `titulo`, 
    `contenido`, 
    `autor`)
     values(
     '$noticia[titulo]',
     '$noticia[contenido]',
     '$noticia[autor]'
     )";

    if ($conn->query($sql) === TRUE) {
        echo("El valor se ha introducido con exito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }

}

function updateArticle() {
    global $conn;
    $noticia = array(
        "titulo" => $_POST['titulo'],
        "contenido" => $_POST['contenido']
    );
    $sql = "update `noticias` 
            set 
            `titulo` = '$noticia[titulo]', 
            `contenido` = '$noticia[contenido]'
            where 
            `id` = '$_SESSION[noticia_id]'";

    if ($conn->query($sql) === TRUE) {
        echo("La noticia ha sido modificado con éxito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function deleteArticle() {
    global $conn;
    $sql = "delete from `noticias` where `id` = '$_GET[id]'";

    if ($conn->query($sql) === TRUE) {
        echo("La noticia ha sido eliminada con éxito");
    } else {
        echo("Error " . $sql . "<br>" . $conn->error);
    }
}

function getArticles() {

}

