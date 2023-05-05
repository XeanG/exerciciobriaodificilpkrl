<?php
session_start();

if (isset($_SESSION['username']) == true) {
  echo "<div class='container position-absolute top-50 start-50 translate-middle w-75 h-75 d-flex align-items-evenly justify-items-center row'>
    <h1 class='text-center'>Erro</h1><p>Você está logado.</p>";
  header('location:cartucho.php');
}

$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

$nome_completo = $_POST["nome_completo"];
$email = $_POST["email"];
$nome_de_usuario = $_POST["nome_de_usuario"];
$hash = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome_completo, email, nome_de_usuario, senha, adm) VALUES ('$nome_completo', '$email', '$nome_de_usuario', '$hash', '0')";

if (mysqli_query($conn, $sql)) {
  echo "Cadastro realizado com sucesso!";
  header('Location: index.php');
} else {
  echo "Erro ao realizar cadastro: " . mysqli_error($conn);
}

$conn->close();
