<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'compartido/header.php' ?>

<div class="box">
    <aside class="usuarios">
        <?php include 'usuario/list_usuarios.php'?>
    </aside>
    <main class="noticias">
        <?php include 'noticia/cuerpo.php'?>
    </main>
</div>

</body>
</html>

<?php
// TODO: Create Success screen when we manipulate data
// TODO: Store likes in cookies.
?>