<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Consulta tabela cartuchos
$select = "SELECT * FROM cartuchos WHERE id = '$id'";
$result = $conn->query($select);

// Insere no histórico
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

// Deleta o cartucho
$delete = "DELETE FROM cartuchos WHERE id = '$id'";
$result = $conn->query($delete);

header('Location: mostrar_cartuchos.php');
?>