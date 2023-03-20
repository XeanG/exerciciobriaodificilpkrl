<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Cartucho</title>
</head>

<body>
  <div class="container position-absolute top-50 start-50 translate-middle w-50">
    <?php
    $nome_cartucho_cd = $_POST['nome_cartucho_cd'];
    $sistema = $_POST['sistema'];
    $tela = $_POST['tela'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "mysqluser", "AHAHAHABORGES");

    // Checa a conexão
    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO cartuchos (nome_cartucho_cd, sistema, tela) VALUES ('$nome_cartucho_cd', '$sistema', '$tela')";

    if ($conn->query($sql) === TRUE) {
      echo "<h1>Novo cartucho adicionado com sucesso!</h1>";
    } else {
      echo "<h1>Erro: </h1><p>" . $sql . "</p><p>" . $conn->error . "</p>";
    }

    $conn->close();
    ?>
  </div>
</body>