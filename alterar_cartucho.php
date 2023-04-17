<?php
session_start();
if (!isset($_SESSION['username']) == true) {
  session_destroy();
  header('location:index.php');
}

// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');
$id_cartucho = $_POST["id_cartucho"];
$nome_cartucho = $_POST["nome_cartucho_cd"];
$ano = $_POST["ano"];
$sistema = $_POST["sistema"];

// Executa a consulta SQL
$sql = "UPDATE cartuchos SET nome_cartucho_cd = '$nome_cartucho', ano = '$ano', sistema = '$sistema' WHERE id = '$id_cartucho'";
$result = $conn->query($sql);

header('Location: mostrar_cartuchos.php');
?>