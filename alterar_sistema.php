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

$id = $_POST["id_sistema"];
$nome = $_POST["nome_sistema"];
$ano = $_POST["ano"];
$empresa = $_POST["empresa"];

$sql = "UPDATE sistemas SET nome = '$nome', ano = '$ano', empresa = '$empresa' WHERE id = '$id'";
$result = $conn->query($sql);

header('Location: mostrar_sistemas.php');
