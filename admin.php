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
  if (!isset($_SESSION['username']) == true || $_SESSION["admin"] == 0) {
    session_destroy();
    header('location:index.php');
  }
  ?>
</head>

<body>
  <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center px-4 px-lg-5 py-3 py-lg-0 bg-white">
      <div class="navbar-nav py-0">
        <a href="admin.php" class="nav-item nav-link active">Administrador</a>
        <a href="cartucho.php" class="nav-item nav-link">Adicionar cartuchos</a>
        <a href="mostrar_cartuchos.php" class="nav-item nav-link">Cartuchos</a>
        <a href="logout.php" class="nav-item nav-link">Sair</a>
      </div>
    </nav>
  </div>
  <div class="container position-absolute top-50 start-50 translate-middle w-50 h-75 d-flex align-items-evenly justify-items-center row">
    <h1 class="text-center">Painel do Administrador</h1>
    <form action="cartucho_antigo.php" method="post">
      <div class="d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Pesquisar cartucho mais antigo">
      </div>
    </form>
    <form action="dono_cartucho.php" method="post">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="nome_cartucho_cd" name="nome_cartucho_cd" placeholder="Nome do Cartucho/CD">
        </div>
      </div>
      <div class="d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Pesquisar dono">
      </div>
    </form>
    <form action="numero_jogos.php" method="post">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="sistema" name="sistema" placeholder="Sistema">
        </div>
      </div>
      <div class="d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Pesquisar número de jogos">
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>