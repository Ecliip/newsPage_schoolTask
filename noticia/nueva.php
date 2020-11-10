<?php
 if (isset($_POST['titulo'])) {
     include '../compartido/funciones_bd.php';

     addArticle();
     header("Location: /ilerna");
     exit;
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

<?php include '../compartido/cabecera.php' ?>

<main class="global-wrapper-row">
    <form action='<?php $_SERVER['PHP_SELF']?>' method='post' class='formulario'>
        <div class='form-item'>
            <label for='titulo'>Titulo: </label><br>
            <input required type='text' name='titulo' id='titulo' maxlength="500">
        </div>
        <div class='form-item'>
            <label for='contenido'>Contenido: </label><br>
            <textarea type='text' required name='contenido' id='textarea_editor' maxlength="1000"></textarea>
        </div>
        <div class='form-item'>
            <label for='autor'>Autor: </label><br>
            <input required type='text' name='autor' id='autor'>
        </div>
        <input class='button button-blue' type='submit' value='Agregar'>
    </form>;
</main>
</body>
</html>