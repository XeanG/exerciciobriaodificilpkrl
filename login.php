<?php
session_start();

if (isset($_SESSION['username']) == true) {
  echo "<div class='container position-absolute top-50 start-50 translate-middle w-75 h-75 d-flex align-items-evenly justify-items-center row'>
    <h1 class='text-center'>Erro</h1><p>Você está logado.</p>";
  header('location:cartucho.php');
}

$user = $_POST["username"];
$senha = $_POST["password"];

if (!empty($user) && !empty($senha)) {
  // Conexão com o banco de dados
  $conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');
  // Checa a conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  // Executa a consulta SQL
  $sql = "SELECT * FROM usuarios WHERE nome_de_usuario = '$user'";
  $result = $conn->query($sql);

  // Exibe os resultados
  while ($row = $result->fetch_assoc()) {
    if ($row['adm'] != '1') {
      $verify = password_verify($senha, $row["senha"]);
      if ($verify) {
        $_SESSION["username"] = $user;
        $_SESSION["admin"] = 0;
        $_SESSION['id'] = $row['id'];
        header('Location: cartucho.php');
      } else {
        header('Location: index.php');
      }
    } else {
      if ($senha == $row["senha"]) {
        $_SESSION["username"] = $user;
        $_SESSION["admin"] = 1;
        $_SESSION["id"] = $row['id'];
        header('Location: admin.php');
      } else {
        header('Location: index.php');
      }
    }
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
