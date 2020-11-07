<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
}
$sql = "select * from `usuarios` where `id` = '$_GET[id]'";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<?php include '../compartido/header.php' ?>

<main>

    <?php
    foreach($conn->query($sql) as $row) {
        echo "<div class='usuario_completo'>
            <p>
                <span class='usuario_enunciado'>Nombre: </span> 
                <span class='usuario_data'>". $row['nombre'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Email: </span> 
                <span class='usuario_data'>". $row['email'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Edad: </span> 
                <span class='usuario_data'>". $row['edad'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Fecha de nacimiento: </span> 
                <span class='usuario_data'>". $row['f_nacimiento'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Dirección: </span> 
                <span class='usuario_data'>". $row['direccion'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Código postal: </span> 
                <span class='usuario_data'>". $row['c_postal'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Nombre: </span> 
                <span class='usuario_data'>". $row['provincia'] ."</span>
            </p>
            <p>
                <span class='usuario_enunciado'>Nombre: </span> 
                <span class='usuario_data'>". $row['genero'] ."</span>
            </p>";

        if (isset($_SESSION['nombre'])) {
           echo "<form action='?id=" . $row['id'] . "&redactar=true' method='post'>
                <input type='submit' class='button button-blue' value='Modificar datos'>
            </form>";
        }
            
       echo "</div>";

        if(isset($_GET['redactar'])) {
            foreach($conn->query($sql) as $row) {
                echo "<form action='modificar.php?id=". $row['id'] ."' method='post' class='forma-noticia'>
                    <div class='form-item'>
            <label for='nombre'>Nombre: </label><br>
            <input required type='text' name='nombre' id='nombre' maxlength='40' value='". $row['nombre'] ."'>
        </div>
        <div class='form-item'>
            <label for='password'>Contraseña: </label><br>
            <input required type='text' name='password' id='password' maxlength='20' value='". $row['contrasena'] ."'>
        </div>
        <div class='form-item'>
            <label for='email'>email: </label><br>
            <input required type='email' name='email' id='email' maxlength='50' value='". $row['email'] ."'>
        </div>
        <div class='form-item'>
            <label for='edad'>edad: </label><br>
            <input type='number' name='edad' id='edad' max='120' value='". $row['edad'] ."'>
        </div>
        <div class='form-item'>
            <label for='f_nacimiento'>fecha de nacimiento: </label><br>
            <input type='date' name='f_nacimiento' id='f_nacimiento' value='". $row['f_nacimiento'] ."'>
        </div>
        <div class='form-item'>
            <label for='direccion'>direccion: </label><br>
            <input type='text' name='direccion' id='direccion' maxlength='400' value='". $row['direccion'] ."'>
        </div>
        <div class='form-item'>
            <label for='c_postal'>código postal: </label><br>
            <input type='text' name='c_postal' id='c_postal' maxlength='5' value='". $row['c_postal'] ."'>
        </div>
        <div class='form-item'>
            <label for='provincia'>provincia: </label><br>
            <input type='text' name='provincia' id='provincia' maxlength='40' value='". $row['provincia'] ."'>
        </div>
        <div class='form-item'>
            <input type='radio' name='genero' value='hombre' id='genero_h'>
            <label for='genero_h'>hombre: </label><br>

            <input type='radio' name='genero' value='mujer' id='genero_m'>
            <label for='genero_m'>mujer: </label>
        </div>
          
                    <input class='button button-blue' type='submit' value='Modificar'>
                </form>";
            }
        }
    }
    ?>



</main>
</body>
</html>
