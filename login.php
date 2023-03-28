<?php
session_start();

$user = $_POST["username"];
$senha = $_POST["password"];

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
  while ($row = $result->fetch_assoc()) {
    if ($row['adm'] != '1') {
      $verify = password_verify($senha, $row["senha"]);
      if ($verify) {
        $_SESSION["username"] = $user;
        $_SESSION["admin"] = 0;
        echo $row["id"];
        $_SESSION['id'] = $row['id'];
        echo $_SESSION['id'];
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
      }
    }
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>