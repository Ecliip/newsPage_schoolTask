<?php
    if (isset($_POST['nombre'])) {
        include '../compartido/funciones_bd.php';
        addUser();
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
    <form class="formulario" action="form_usuario.php" method="post">
        <div class="form-item">
            <label for="nombre">Nombre: </label><br>
            <input required type="text" name="nombre" id="nombre" maxlength="40">
        </div>
        <div class="form-item">
            <label for="password">Contraseña: </label><br>
            <input required type="text" name="password" id="password" maxlength="20">
        </div>
        <div class="form-item">
            <label for="email">email: </label><br>
            <input required type="email" name="email" id="email" maxlength="50">
        </div>
        <div class="form-item">
            <label for="edad">edad: </label><br>
            <input type="number" name="edad" id="edad" max="120">
        </div>
        <div class="form-item">
            <label for="f_nacimiento">fecha de nacimiento: </label><br>
            <input type="date" name="f_nacimiento" id="f_nacimiento">
        </div>
        <div class="form-item">
            <label for="direccion">dirreccion: </label><br>
            <input type="text" name="direccion" id="direccion" maxlength="400">
        </div>
        <div class="form-item">
            <label for="c_postal">código postal: </label><br>
            <input type="text" name="c_postal" id="c_postal" maxlength="5">
        </div>
        <div class="form-item">
            <label for="provincia">provincia: </label><br>
            <input type="text" name="provincia" id="provincia" maxlength="40">
        </div>
        <div class="form-item">
            <input type="radio" name="genero" value="hombre" id="genero_h">
            <label for="genero_h">hombre: </label><br>

            <input type="radio" name="genero" value="mujer" id="genero_m" >
            <label for="genero_m">mujer: </label>
        </div>
        <input class='button button-green' type="submit" value="Enviar">
    </form>
</main>
</body>
</html>