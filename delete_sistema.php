<?php
session_start();
if (!isset($_SESSION['username']) == true || $_SESSION["admin"] == 0) {
  session_destroy();
  header('location:index.php');
}

$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

$delete = "DELETE FROM sistemas WHERE id = '$id'";
$result = $conn->query($delete);

header('Location: mostrar_cartuchos.php');
