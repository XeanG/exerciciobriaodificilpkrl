<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cartuchos</title>
  <?php
  session_start();
  if (!isset($_SESSION['username']) == true) {
    session_destroy();
    header('location:index.php');
  }
  ?>
</head>

<body>
  <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center px-4 px-lg-5 py-3 py-lg-0 bg-white">
      <?php
      $usr = $_SESSION['username'];
      echo "<div class='navbar-nav py-0'>
          <span class='nav-item'>$usr</span>
          </div>
          <div class='navbar-nav py-0'>";
      if ($_SESSION["admin"] == 1) {
        echo "<a href='admin.php' class='nav-item nav-link'>Administrador</a>
          <a href='cartucho.php' class='nav-item nav-link'>Adicionar cartuchos</a>
          <a href='mostrar_cartuchos.php' class='nav-item nav-link active'>Cartuchos</a>
          <a href='pesquisa.php' class='nav-item nav-link'>Pesquisa produto</a>
          <a href='logout.php' class='nav-item nav-link'>Sair</a>";
      } else {
        echo "<a href='cartucho.php' class='nav-item nav-link'>Adicionar cartuchos</a>
          <a href='mostrar_cartuchos.php' class='nav-item nav-link active'>Seus cartuchos</a>
          <a href='pesquisa.php' class='nav-item nav-link'>Pesquisa produto</a>
          <a href='logout.php' class='nav-item nav-link'>Sair</a>";
      }
      ?>
  </div>
  </nav>
  </div>
  <div class="container position-absolute top-50 start-50 translate-middle w-75 h-75 d-flex align-items-evenly justify-items-center row">
    <h1 class="text-center">Cartuchos</h1>
    <?php
    $id_usuario = $_SESSION['id'];
    $adm = $_SESSION['admin'];
    function onclickdelete($id)
    {
      $delete = "window.location.href = 'delete.php?id=" . $id . "'";
      $string = 'onclick="' . $delete . '"';
      return $string;
    }
    function onclickupdate($id)
    {
      $update = "window.location.href = 'update.php?id=" . $id . "'";
      $string = 'onclick="' . $update . '"';
      return $string;
    }
    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "AHAHAHABORGES");
    // Checa a conexão
    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL para selecionar todos os cartuchos
    $sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema, u.nome_completo FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id ORDER BY c.id";
    if ($adm != '1') {
      $sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id WHERE u.id = '$id_usuario' ORDER BY c.id";
    }
    $result = $conn->query($sql);

    // Checa se há algum resultado
    if ($result->num_rows > 0) {
      // Exibe cada cartucho em uma tabela
      if ($adm != '1') {
        echo "<table class='table table-bordered'>
        <thead>
          <tr class='table-dark'>
            <th scope='col'>ID</th>
            <th scope='col'>Nome do cartucho/CD</th>
            <th scope='col'>Ano</th>
            <th scope='col'>Sistema</th>
            <th scope='col'>Tela</th>
            <th scope='col'/>
            <th scope='col'/>
          </tr>
        </thead>
        <tbody>";
      } else {
        echo "<table class='table table-bordered'>
          <thead>
            <tr class='table-dark'>
              <th scope='col'>ID</th>
              <th scope='col'>Nome do cartucho/CD</th>
              <th scope='col'>Ano</th>
              <th scope='col'>Sistema</th>
              <th scope='col'>Tela</th>
              <th scope='col'>Usuário</th>
              <th scope='col'/>
              <th scope='col'/>
            </tr>
          </thead>
          <tbody>";
      }
      while ($row = $result->fetch_assoc()) {
        if ($adm != '1') {
          echo "<tr><th scope='row'>" . $row["id"] . "</th><td>" . $row["nome_cartucho_cd"] . "</td><td>" . $row["ano"] . "</td><td>" . $row["sistema"] . "</td><td><a href='exibir_imagem.php?id=" . $row["id"] . "'>Ver</a></td><td><input class='btn btn-outline-success' type='button' value='Update'" . onclickupdate($row["id"]) . "></td><td><input class='btn btn-outline-danger' type='button' value='Delete'" . onclickdelete($row["id"]) . "></td></tr>";
        } else {
          echo "<tr><th scope='row'>" . $row["id"] . "</th><td>" . $row["nome_cartucho_cd"] . "</td><td>" . $row["ano"] . "</td><td>" . $row["sistema"] . "</td><td><a href='exibir_imagem.php?id=" . $row["id"] . "'>Ver</a></td><td>" . $row["nome_completo"] . "</td><td><input class='btn btn-outline-success' type='button' value='Update'" . onclickupdate($row["id"]) . "></td><td><input class='btn btn-outline-danger' type='button' value='Delete'" . onclickdelete($row["id"]) . "></td></tr>";
        }
      }
      echo "</tbody></table>";
    } else {
      echo "<h3 class='text-center'>Nenhum cartucho encontrado.</h3>";
    }

    $conn->close();
    ?>

    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>