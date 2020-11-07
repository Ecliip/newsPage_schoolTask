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
    <form action='agregar_noticia.php' method='post' class='forma-noticia'>
        <div class='form-item'>
            <label for='titulo'>Titulo: </label><br>
            <input required type='text' name='titulo' id='titulo' maxlength="500">
        </div>
        <div class='form-item'>
            <label for='contenido'>Contenido: </label><br>
            <textarea type='text' required name='contenido' id='editor_contenido' maxlength="1000"></textarea>
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