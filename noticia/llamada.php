<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'm07';
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_errno);
} else

//include '../compartido/funciones_bd.php';

$sql = "select * from `noticias` where `id` = '$_GET[article]'";

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
        echo "<div class='noticia'>
            <h2 class='titulo'>" . $row['titulo'] . "</h2>
            <div class='info'>
                <span>" . date('d/m/Y', strtotime($row['hora_creacion'])) . "</span><span>" . $row['autor'] . "</span>
            </div>
            <p class='contenido'>" . $row['contenido'] . "</p>
            <form action='?article=" . $row['id'] . "&redactar=true' method='post'>
                <input type='submit' class='button button-green' value='Redactar'>
            </form>
        </div>";

        if(isset($_GET['redactar'])) {
            foreach($conn->query($sql) as $row) {
                $_SESSION['noticia_id'] = $row['id'];
                echo "<form action='modificar_noticia.php' method='post' class='forma-noticia'>
                    <div class='form-item'>
                        <label for='titulo'>Titulo: </label><br>
                        <input required type='text' name='titulo' id='titulo' value='" . $row['titulo'] . "'>
                    </div>
                    <div class='form-item'>
                        <label for='contenido'>Contenido: </label><br>
                        <textarea type='text' required name='contenido' id='editor_contenido'>" . $row['contenido'] . "</textarea>
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
