<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'compartido/cabecera.php' ?>

<div class="box">
    <form method="GET" action="/ilerna/usuario/auth.php">
        <div class="form-item">
            <label for="email">Email: </label><br>
            <input type="email" name="email" id="email" onkeyup="getEmail(this.value)">
        </div>
        <div class="form-item">
            <label for="password"">Contraseña: </label><br>
            <input type="password"  name="password" id="password" onkeyup="getPassword(this.value)">
        </div><br>
            <input type="submit" class="button button-blue" value="Entrar" ">
    </form>

    <script>
        let password = '';
        let email = '';
        function getEmail(theEmail) {
            email = theEmail;
        }
        function getPassword(thePassword) {
            password = thePassword;
        }
        function iniciarSesion() {
            // TODO: this function is not called.
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = () => {
                if (this.status == 200 && this.readyState == 4) {
                console.log(this.response);
                }
            };
            xmlhttp.open('POST', `/ilerna/usuario/auth.php?email=${email}&password=${password}`);
            xmlhttp.send();
        }
    </script>
</div>

</body>
</html>

<?php
?>