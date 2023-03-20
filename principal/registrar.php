<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");

// Checa a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Processa o formulário de registro
$nome_completo = $_POST["nome_completo"];
$email = $_POST["email"];
$nome_de_usuario = $_POST["nome_de_usuario"];
$senha = $_POST["senha"];

// Insere os dados do usuário no banco de dados
$sql = "INSERT INTO usuarios (nome_completo, email, nome_de_usuario, senha) VALUES ('$nome_completo', '$email', '$nome_de_usuario', '$senha')";

if (mysqli_query($conn, $sql)) {
    echo "Cadastro realizado com sucesso!";
    header('Location: index.php');
} else {
    echo "Erro ao realizar cadastro: " . mysqli_error($conn);
}

$conn->close();
