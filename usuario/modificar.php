<?php
session_start();
include '../compartido/funciones_bd.php';
updateUser();
header('Location: /ilerna');
exit;