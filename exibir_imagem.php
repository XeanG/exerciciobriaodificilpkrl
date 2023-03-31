<?php
// Conecta-se ao banco de dados
$conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');

// Obtém o ID da imagem a ser exibida
$id = isset($_GET['id']) ? $_GET['id'] : null;

$imagem;
$tamanho;
$tipo;

// Obtém a imagem do banco de dados
$sql = "SELECT nome, tipo, tamanho, imagem FROM arquivos WHERE id = $id";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
  $imagem = $row["imagem"];
  $tamanho = $row["tamanho"];
  $tipo = $row["tipo"];
}
// Verifica se a imagem foi encontrada
if ($result->num_rows != 1) {
  echo 'Imagem não encontrada';
  exit;
}

// Exibe a imagem
header("Content-Type: $tipo");
header("Content-Length: $tamanho");
echo $imagem;


$conn->close();
?>