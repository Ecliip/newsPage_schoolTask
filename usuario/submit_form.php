<?php
include '../compartido/funciones_bd.php';
addUser();
header("Location: /ilerna");
exit;













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
//} else {
//    echo('Conexion establecida');
//}
//
////foreach ($usuario as $value) {
////    echo "<br>" . $value . "<br>";
////}
//
//
////$sql = "insert into `users`(`name`, `l_name`) values('$nombre', '$apellido')";
////
////if ($conn->query($sql) === TRUE) {
////    echo("El valor se ha introducido con exito");
////} else {
////    echo("Error " . $sql . "<br>" . $conn->error);
////}
//
//$sql = "insert into `usuarios`(
//    `nombre`,
//    `contrasena`,
//    `email`,
//    `edad`,
//    `f_nacimiento`,
//    `direccion`,
//     `c_postal`,
//     `provincia`,
//     `genero`)
//     values(
//     '$usuario[nombre]',
//     '$usuario[password]',
//     '$usuario[email]',
//     '$usuario[edad]',
//     '$usuario[f_nacimiento]',
//     '$usuario[direccion]',
//     '$usuario[c_postal]',
//     '$usuario[provincia]',
//     '$usuario[genero]'
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