<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');

// Obtém o ID da imagem a ser exibida
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Obtém a imagem do banco de dados
$sql = "SELECT * FROM cartuchos WHERE id = $id";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
  Header("Content-type: image/gif");
  echo $row->tela;
}

$conn->close();
