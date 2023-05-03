<?php
session_start();
if (!isset($_SESSION['username']) == true || $_SESSION["admin"] == 0) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
$id = $_POST["id_sistema"];
$nome = $_POST["nome_sistema"];
$ano = $_POST["ano"];
$empresa = $_POST["empresa"];

// Executa a consulta SQL
$sql = "UPDATE sistemas SET nome = '$nome', ano = '$ano', empresa = '$empresa' WHERE id = '$id'";
$result = $conn->query($sql);

header('Location: mostrar_sistemas.php');
