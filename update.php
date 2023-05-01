<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cartucho</title>
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
          </div>";
      ?>
      <div class="navbar-nav py-0">
        <div class="vr ms-2"></div>
        <a href="admin.php" class="nav-item nav-link">Administrador</a>
        <a href="cartucho.php" class="nav-item nav-link">Adicionar cartuchos</a>
        <a href="" class="nav-item nav-link active">Alterar cartuchos</a>
        <a href="mostrar_cartuchos.php" class="nav-item nav-link">Cartuchos</a>
        <a href="pesquisa.php" class="nav-item nav-link">Pesquisa produto</a>
        <a href="logout.php" class="nav-item nav-link">Sair</a>
      </div>
    </nav>
  </div>
  <?php
  if (!isset($_SESSION['username']) == true) {
    session_destroy();
    header('location:index.php');
  }

  // Conecta-se ao banco de dados
  $conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');

  // Obtém o ID da imagem a ser exibida
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  // Executa a consulta SQL
  $sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema, u.nome_completo FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id ORDER BY c.id";
  $result = $conn->query($sql);
  $id_cartucho;
  $nome_cartucho;
  $ano;
  $sistema;

  while ($row = $result->fetch_assoc()) {
    $id_cartucho = $row["id"];
    $nome_cartucho = $row["nome_cartucho_cd"];
    $ano = $row["ano"];
    $sistema = $row["sistema"];
  }
  ?>
  <div class="container position-absolute top-50 start-50 translate-middle w-75 h-75 d-flex align-items-evenly justify-items-center row">
    <h1 class="text-center">Alterar
      <?php
      echo $nome_cartucho;
      ?></h1>
    <form enctype="multipart/form-data" action="alterar_cartucho.php" method="post">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="hidden" class="form-control" id="id_cartucho" name="id_cartucho" placeholder="ID" value="<?php echo $id_cartucho ?>">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="nome_cartucho_cd" name="nome_cartucho_cd" placeholder="Nome do Cartucho/CD" value="<?php echo $nome_cartucho ?>">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano" value="<?php echo $ano ?>">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="sistema" name="sistema" placeholder="Sistema" value="<?php echo $sistema ?>">
        </div>
      </div>
      <div class="mb-3 d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Alterar">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>