<?php
session_start();

include '../compartido/funciones_bd.php';

updateArticle();



//echo $_SESSION['noticia_id'];
//
//$noticia = array(
//    "titulo" => $_POST['titulo'],
//    "contenido" => $_POST['contenido']
//);
//
//
//$servername = 'localhost';
//$username = 'root';
//$password = '';
//$dbName = 'm07';
//$conn = new mysqli($servername, $username, $password, $dbName);
//
//if ($conn->connect_error) {
//    die('Error de conexion: ' . $conn->connect_errno);
//}
//
//
//$sql = "update `noticias`
//            set
//            `titulo` = '$noticia[titulo]',
//            `contenido` = '$noticia[contenido]'
//            where
//            `id` = '$_SESSION[noticia_id]'";
//
//if ($conn->query($sql) === TRUE) {
//    echo("La noticia ha sido modificado con éxito");
//} else {
//    echo("Error " . $sql . "<br>" . $conn->error);
//}
