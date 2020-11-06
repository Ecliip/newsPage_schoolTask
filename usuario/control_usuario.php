<?php

session_start();


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

    <h2>Elige lo que quieres hacer</h2>
    <div class="buttons">
        <button class="button button-green"><a href="form_usuario.php">Crear un usuario</a></button>
        <button class="button button-blue"><a href="buscar_email_y_modificar.php">Modificar un usuario</a></button>
        <button class="button button-red"><a href="buscar_email_y_eliminar.php">Eliminar un usuario</a></button>
    </div>

</main>
</body>
</html>