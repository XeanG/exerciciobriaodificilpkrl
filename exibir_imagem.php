<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

$sql = "SELECT * FROM cartuchos WHERE id = $id";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
  Header("Content-type: image/gif");
  echo $row->tela;
}

$conn->close();
