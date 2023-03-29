<?php
session_start();
$preco = $_POST["preco"];
$nome = $_POST["nome"];

// Verifica se o campo de preço foi preenchido
if (!empty($preco) && !empty($nome)) {
  // Conexão com o banco de dados
  $conn = new mysqli("localhost", "root", "", "AHAHAHABORGES");

  // Checa a conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  // Executa a consulta SQL
  $sql = "SELECT * FROM produtos WHERE preco > $preco AND nome LIKE '$nome%'";
  $result = $conn->query($sql);

  // Exibe os resultados
  //while ($row = $result->fetch_array()) {
  // echo "ID: " . $row["id"] . "<br>";
  // echo "Nome: " . $row["nome"] . "<br>";
  // echo "Preço: " . $row["preco"] . "<br>";
  //}
  echo "<table><tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["preco"] . "</td></tr>";
  }
  echo "</table>";

  // Fecha a conexão com o banco de dados
  $conn->close();
}
