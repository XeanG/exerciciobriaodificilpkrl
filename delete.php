<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Executa a consulta SQL
$sql = "DELETE FROM cartuchos WHERE id = '$id'";
$result = $conn->query($sql);

header('Location: mostrar_cartuchos.php');
?>