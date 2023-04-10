<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');
var_dump($conn);

// Obtém o ID da imagem a ser exibida
$id = isset($_GET['id']) ? $_GET['id'] : null;

echo $id;
?>