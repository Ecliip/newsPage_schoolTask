<?php

include '../compartido/funciones_bd.php';

addArticle();

header("Location: /ilerna");
exit;

//
//$noticia = array(
//    "titulo" => $_POST['titulo'],
//    "contenido" => $_POST['contenido'],
//    "autor" => $_POST['autor']);
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
//$sql = "insert into `noticias`(
//    `titulo`,
//    `contenido`,
//    `autor`)
//     values(
//     '$noticia[titulo]',
//     '$noticia[contenido]',
//     '$noticia[autor]'
//     )";
//
//if ($conn->query($sql) === TRUE) {
//    echo("El valor se ha introducido con exito");
//} else {
//    echo("Error " . $sql . "<br>" . $conn->error);
//}
////
////if ($conn->query($sql) === TRUE) {
////    echo("El valor se ha introducido con exito");
////} else {
////    echo("Error " . $sql . "<br>" . $conn->error);
////}