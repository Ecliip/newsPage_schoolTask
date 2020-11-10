<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'compartido/cabecera.php' ?>

<div class="usuario-view">
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
?>