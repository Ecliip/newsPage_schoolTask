<?php
include '../conexion.php';
global $conn;

$sql = "select * from `noticias` where `id` = '$_GET[article]'";

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
        echo "<div class='noticia'>
            <h2 class='titulo'>" . $row['titulo'] . "</h2>
            <div class='info'>
                <span>" . date('d/m/Y', strtotime($row['hora_creacion'])) . "</span><span>" . $row['autor'] . "</span>
            </div>
            <p class='contenido'>" . $row['contenido'] . "</p>";

        if(isset($_SESSION['nombre'])) {
            echo "<form action='?article=" . $row['id'] . "&redactar=true' method='post'>
                <input type='submit' class='button button-green' value='Redactar'>
            </form>";
        }
          echo "</div>";
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
