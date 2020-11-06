<?php

include '../compartido/funciones_bd.php';

deleteUser();

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
//$sql = "delete from `usuarios` where `email` = '$_POST[email]'";
//
//if ($conn->query($sql) === TRUE) {
//    echo("El usuario se ha eliminado con éxito");
//} else {
//    echo("Error " . $sql . "<br>" . $conn->error);
//}