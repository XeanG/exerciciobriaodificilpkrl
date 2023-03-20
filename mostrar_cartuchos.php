<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cartuchos</title>
  <?php
    session_start();
    if(!isset ($_SESSION['username']) == true) {
      header('location:index.php');
    }

    $logado = $_SESSION['login'];
  ?>
</head>

<body>
  <div class="container position-absolute top-50 start-50 translate-middle w-50">
  <h1 class="text-center">Cartuchos</h1>
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
      echo "<table class='table'>
        <thead>
          <tr class='table-dark'>
            <th scope='col'>ID</th>
            <th scope='col'>Nome do cartucho/CD</th>
            <th scope='col'>Sistema</th>
            <th scope='col'>Tela</th>
          </tr>
        </thead>
        <tbody>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><th scope='row'>".$row["id"]."</th><td>".$row["nome_cartucho_cd"]."</td><td>".$row["sistema"]."</td><td>".$row["tela"]."</td></tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "Nenhum cartucho encontrado.";
    }

    $conn->close();
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
