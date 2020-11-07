<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<?php include '../header.php' ?>

<main>
    <h2>Introduce email de usuario que quieres modificar</h2>

    <form action="modificar_usuario.php" method="post">
        <input type="email" name="email" maxlength="30">
        <input class="button button-blue" type="submit">
    </form>

</main>
</body>
</html>