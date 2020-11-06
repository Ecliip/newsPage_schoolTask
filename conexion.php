<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

$q = intval($_GET['q']);

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
} else {
    echo('Conexion establecida');
}



$sql = "insert into `users`(`name`, `l_name`) values('$nombre', '$apellido')";

if ($conn->query($sql) === TRUE) {
    echo("El valor se ha introducido con exito");
} else {
    echo("Error " . $sql . "<br>" . $conn->error);
}