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

$select = "SELECT * FROM cartuchos WHERE id = '$id'";
$result = $conn->query($select);

while ($row = $result->fetch_assoc()) {
  $nome = $row['nome_cartucho_cd'];
  $ano = $row['ano'];
  $sistema = $row['sistema'];
  $data = date("Y-m-d");
  $data = date("d/m/Y", strtotime($data));
  $user = $row['id_usuario'];
  $insert = "INSERT INTO deletados VALUES ('$id', '$nome', '$ano', '$sistema', '$data', '$user')";
  $query = $conn->query($insert);
}

$delete = "DELETE FROM cartuchos WHERE id = '$id'";
$result = $conn->query($delete);

header('Location: mostrar_cartuchos.php');
