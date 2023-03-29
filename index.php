<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Tela de login</title>
  <?php
  session_start();
  if (isset($_SESSION['username']) == true) {
    echo "<div class='container position-absolute top-50 start-50 translate-middle w-50 h-75 d-flex align-items-evenly justify-items-center row'>
    <h1 class='text-center'>Erro</h1><p>Você está logado.</p>";
    header('location:cartucho.php');
  }
  ?>
</head>

<body>
  <div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center px-4 px-lg-5 py-3 py-lg-0 bg-white">
      <div class="navbar-nav py-0">
        <a href="index.php" class="nav-item nav-link active">Login</a>
        <a href="registro.php" class="nav-item nav-link">Cadastro</a>
      </div>
    </nav>
  </div>
  <div class="container position-absolute top-50 start-50 translate-middle w-50 h-75 d-flex align-items-evenly justify-items-center row">
    <h1 class="text-center">Login</h1>
    <form method="POST" action="login.php">
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <!--<label for="username" class="text-end col-sm-2 col-form-label w-25">Usuário:</label>-->
        <div class="col-sm-10 w-75">
          <input type="text" class="form-control" id="username" name="username" placeholder="Usuário">
        </div>
      </div>
      <div class="row mb-3 d-flex justify-content-evenly align-items-center">
        <!--<label for="password" class="text-end col-sm-2 col-form-label w-25">Senha:</label>-->
        <div class="col-sm-3 w-75 input-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
          <span class="input-group-btn">
            <button type="button" class="btn btn-default" onclick="mostra_senha('password')">
              <i class="bi bi-eye-fill"></i>
            </button>
          </span>
        </div>
      </div>
      <div class="mb-3 d-flex justify-content-evenly align-items-center">
        <input class="btn btn-outline-primary" type="submit" value="Entrar">
        <input class="btn btn-outline-primary" type="button" value="Criar uma conta" onclick="window.location.href = 'registro.php';">
      </div>
    </form>
  </div>

  <script src="/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>