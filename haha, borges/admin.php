<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para selecionar quem possui cada cartucho
$sql_cartuchos = "SELECT c.id, c.nome_cartucho_cd, c.sistema, c.tela, u.nome_usuario FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id";
$result_cartuchos = $conn->query($sql_cartuchos);

// Consulta SQL para selecionar o cartucho mais antigo e a quem pertence
$sql_antigo = "SELECT c.nome_cartucho_cd, u.nome_usuario, c.sistema, c.tela, MIN(c.data_lancamento) AS data_lancamento FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id";
$result_antigo = $conn->query($sql_antigo);

// Consulta SQL para contar o número de cartuchos para uma plataforma específica
$sql_contagem = "SELECT COUNT(*) AS num_cartuchos FROM cartuchos WHERE sistema = 'sua_plataforma_especifica'";
$result_contagem = $conn->query($sql_contagem);

// Exibe as informações
echo "<h2>Quem possui cada cartucho:</h2>";
if ($result_cartuchos->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nome do cartucho/CD</th><th>Sistema</th><th>Tela</th><th>Nome do usuário</th></tr>";
  while($row = $result_cartuchos->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nome_cartucho_cd"]."</td><td>".$row["sistema"]."</td><td>".$row["tela"]."</td><td>".$row["nome_usuario"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Nenhum cartucho encontrado.";
}

echo "<h2>Cartucho mais antigo:</h2>";
if ($result_antigo->num_rows > 0) {
  $row = $result_antigo->fetch_assoc();
  echo "O cartucho mais antigo é '".$row["nome_cartucho_cd"]."' para o sistema '".$row["sistema"]."', lançado em ".$row["data_lancamento"]." e pertence a ".$row["nome_usuario"].".";
} else {
  echo "Nenhum cartucho encontrado para a plataforma 'sua_plataforma_especifica'.";
}

// Fecha a conexão
$conn->close();
?>
