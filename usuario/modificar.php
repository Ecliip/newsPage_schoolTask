<?php
session_start();
include '../compartido/funciones_bd.php';

updateUser();


//echo $_SESSION['user_id'];
//
//$usuario = array(
//    "nombre" => $_POST['nombre'],
//    "password" => $_POST['password'],
//    "email" => $_POST['email'],
//    "edad" => $_POST['edad'],
//    "f_nacimiento" => $_POST['f_nacimiento'],
//    "direccion" => $_POST['direccion'],
//    "c_postal" => $_POST['c_postal'],
//    "provincia" => $_POST['provincia'],
//    "genero" => $_POST['genero']
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
//$sql = "update `usuarios` set `nombre` = '$usuario[nombre]', `contrasena` = '$usuario[password]', `email` = '$usuario[email]', `edad` = '$usuario[edad]', `f_nacimiento` = '$usuario[f_nacimiento]', `direccion` = '$usuario[direccion]', `c_postal` = '$usuario[c_postal]',`provincia` = '$usuario[provincia]', `genero` = '$usuario[genero]' where `id` = '$_SESSION[user_id]'";
//
//if ($conn->query($sql) === TRUE) {
//    echo("El usuario ha sido modificado con éxito");
//} else {
//    echo("Error " . $sql . "<br>" . $conn->error);
//}
