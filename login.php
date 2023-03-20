<?php
session_start();

$user = $_POST["username"];
$senha = $_POST["password"];

if (!empty($user) && !empty($hash)) {
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
  while ($row = $result->fetch_assoc()) {
    $verify = password_verify($senha, $row["senha"]);
    if ($verify) {
      $_SESSION["username"] = $user;
      header('Location: cartucho.php');
    } else {
      echo 'ERROR';
    }
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>