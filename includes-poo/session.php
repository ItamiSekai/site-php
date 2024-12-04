<?php
session_start();

if (file_exists('libraries/classes/user.php')) {
    require_once 'libraries/classes/user.php';
} else {
    die('Arquivo user.php não encontrado.');
}

if (!isset($_SESSION['usuario'])) {
    header("Location: pagina-login.php");
    exit();
}

// Deserializa o objeto
$usuario = unserialize($_SESSION['usuario']);

?>