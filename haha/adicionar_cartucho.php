<?php
$nome_cartucho_cd = $_POST['nome_cartucho_cd'];
$sistema = $_POST['sistema'];
$tela = $_POST['tela'];

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");

// Checa a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Insere os dados no banco de dados
$sql = "INSERT INTO cartuchos (nome_cartucho_cd, sistema, tela) VALUES ('$nome_cartucho_cd', '$sistema', '$tela')";

if ($conn->query($sql) === TRUE) {
  echo "Novo cartucho adicionado com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
