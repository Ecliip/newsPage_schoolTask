<?php
include '../compartido/funciones_bd.php';

$likedArticles = array('articleId' => $_GET['id']);
$encodedLikedArticles = json_encode($likedArticles);

setcookie('likedArticles', $encodedLikedArticles, time() + 60 * 60 * 24 * 7, '/');
setcookie('total_likes_del_articulo', $_GET['likes'], time() + 60 * 60 * 24 * 7, '/');

addLike();