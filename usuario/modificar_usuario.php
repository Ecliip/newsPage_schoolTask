<?php
session_start();
$email = $_POST['email'];
$generoH = false;

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);



//$sql = 'select * from `noticias` order by `hora_creacion` desc limit 5';
$sql = "select * from `usuarios` where `email` = '$email'";



if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php include '../header.php' ?>

<main>
<?php
        foreach($conn->query($sql) as $row) {
            $_SESSION['user_id'] = $row['id'];
           $generoH = $row['genero'] == 'hombre' ? true : false;

        echo "<form class='form' action='modificar.php' method='post'>
        <div class='form-item'>
            <label for='nombre'>Nombre: </label><br>
            <input required type='text' name='nombre' id='nombre' maxlength='40' value=" . $row['nombre'] . ">
        </div>
        <div class='form-item'>
            <label for='password'>Contraseña: </label><br>
            <input required type='text' name='password' id='password' maxlength='20' value=" . $row['contrasena'] . ">
        </div>
        <div class='form-item'>
            <label for='email'>email: </label><br>
            <input required type='email' name='email' id='email' maxlength='50' value=" . $row['email'] . ">
        </div>
        <div class='form-item'>
            <label for='edad'>edad: </label><br>
            <input type='number' name='edad' id='edad' max='120' value=" . $row['edad'] . ">
        </div>
        <div class='form-item'>
            <label for='f_nacimiento'>fecha de nacimiento: </label><br>
            <input type='date' name='f_nacimiento' id='f_nacimiento' value=" . $row['f_nacimiento'] . ">
        </div>
        <div class='form-item'>
            <label for='direccion'>dirreccion: </label><br>
            <input type='text' name='direccion' id='direccion' maxlength='400' value=" . $row['direccion'] . ">
        </div>
        <div class='form-item'>
            <label for='c_postal'>código postal: </label><br>
            <input type='text' name='c_postal' id='c_postal' maxlength='5' value=" . $row['c_postal'] . ">
        </div>
        <div class='form-item'>
            <label for='provincia'>provincia: </label><br>
            <input type='text' name='provincia' id='provincia' maxlength='40' value=" . $row['provincia'] . ">
        </div>
        <div class='form-item'>
            <input type='radio' name='genero' value='hombre' id='genero_h' checked=". $generoH .">
            <label for='genero_h'>hombre: </label><br>

            <input type='radio' name='genero' value='mujer' id='genero_m' >
            <label for='genero_m'>mujer: </label>
        </div>
        <input class='button button-green' type='submit' value='Enviar'>

    </form>";
    }
   ?> 
</main>

</body>
</html>



