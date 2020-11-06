<?php
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
    <h2>Introduce email de usuario que quieres modificar</h2>

    <form action="eliminar.php" method="post">
        <input type="email" name="email" maxlength="30">
        <input class="button button-red" type="submit">
    </form>

</main>
</body>d
</html>