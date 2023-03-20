<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");

// Checa a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os cartuchos
$sql = "SELECT id, nome_cartucho_cd, sistema, tela FROM cartuchos";
$result = $conn->query($sql);

// Checa se há algum resultado
if ($result->num_rows > 0) {
  // Exibe cada cartucho em uma tabela
  echo "<table><tr><th>ID</th><th>Nome do cartucho/CD</th><th>Sistema</th><th>Tela</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nome_cartucho_cd"]."</td><td>".$row["sistema"]."</td><td>".$row["tela"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Nenhum cartucho encontrado.";
}

$conn->close();
?>
