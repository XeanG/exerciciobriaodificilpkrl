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

$id_cartucho = $_POST["id_cartucho"];
$nome_cartucho = $_POST["nome_cartucho_cd"];
$ano = $_POST["ano"];
$id_sistema = $_POST["sistema"];
$sistema;

$sql = "SELECT * FROM sistemas WHERE id = '$id_sistema'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) $sistema = $row["nome"];

$sql = "UPDATE cartuchos SET nome_cartucho_cd = '$nome_cartucho', ano = '$ano', sistema = '$sistema', id_sistema = '$id_sistema' WHERE id = '$id_cartucho'";
$result = $conn->query($sql);

header('Location: mostrar_cartuchos.php');
