<?php

include '../compartido/funciones_bd.php';

deleteArticle();

//
//$servername = 'localhost';
//$username = 'root';
//$password = '';
//$dbName = 'm07';
//$conn = new mysqli($servername, $username, $password, $dbName);
//
//if ($conn->connect_error) {
//    die('Error de conexion: ' . $conn->connect_errno);
//} else {
//    echo('Conexion establecida');
//}
//
//$sql = "delete from `noticias` where `id` = '$_GET[id]'";
//
//if ($conn->query($sql) === TRUE) {
//    echo("La noticia ha sido eliminada con éxito");
//} else {
//    echo("Error " . $sql . "<br>" . $conn->error);
//}