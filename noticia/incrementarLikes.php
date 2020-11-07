<?php


include '../compartido/funciones_bd.php';

setcookie('id_articulo_meGusta', $_GET['id'], time() + 60 * 60 * 24 * 7, '/');
setcookie('total_likes_del_articulo', $_GET['likes'], time() + 60 * 60 * 24 * 7, '/');

$cookie_name = "usuario";
$cookie_value = "anonimo";
$cookie_name = "like";
$cookie_value = "anonimo";


addLike();