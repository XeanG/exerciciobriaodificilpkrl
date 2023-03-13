<?php
$preco = $_POST["preco"];
$nome = $_POST["nome"];

// Verifica se o campo de preço foi preenchido
if (!empty($preco) && !empty($nome)) {
  // Conecta ao banco de dados
  $conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");
  
  // Executa a consulta SQL
  $sql = "SELECT * FROM produtos WHERE preco > $preco AND nome LIKE '$nome%'";
  $result = $conn->query($sql);

  // Exibe os resultados
  while ($row = $result->fetch_array()) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Nome: " . $row["nome"] . "<br>";
    echo "Preço: " . $row["preco"] . "<br>";
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}

?>
