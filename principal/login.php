<?php
$user = $_POST["username"];
$senha = $_POST["password"];

// Verifica se o campo de preço foi preenchido
if (!empty($user) && !empty($senha)) {
  // Conexão com o banco de dados
  $conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");

  // Checa a conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  // Executa a consulta SQL
  $sql = "SELECT * FROM usuarios WHERE nome_de_usuario = '$user'";
  $result = $conn->query($sql);

  // Exibe os resultados
  while ($row = $result->fetch_array()) {
    if ($row["senha"] == $senha) {
      header('Location: pesquisa.php');
    } else {
      echo 'ERROR';
    }
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
