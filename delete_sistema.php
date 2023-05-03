<?php
session_start();
if (!isset($_SESSION['username']) == true || $_SESSION["admin"] == 0) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Deleta o sistema
$delete = "DELETE FROM sistemas WHERE id = '$id'";
$result = $conn->query($delete);

header('Location: mostrar_cartuchos.php');
